<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class ProductController extends Controller
{


    function index()
    {
        $products = Product::latest()->get();
        $categories = Category::withCount('products')->get();
        return view('admin.products.index', compact('products', 'categories'));
    }
    // create form
    function create()
    {

        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    // store product
    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:225',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->store('products', 'public');
        }

        // dd($request->all());

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'status' => $request->status,
            'image' => $imageName,
            'category_id' => $request->category_id,
        ]);

        return redirect('/admin/products')
            ->with('success', 'Product Added Successfully.');
    }

    // edit product

    function edit(int $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    // update product
    function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {

            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            $product->image = $request->file('image')->store('products', 'public');
        }
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect('/admin/products/')
            ->with('success', 'Product Updated Successfully.');
    }

    function destroy(int $id)
    {
        $product = Product::findOrFail($id);

        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect('/admin/products')
            ->with('success', 'Product Deleted Successfully.');
    }
    // shop 
    function shop(Request $request, $category = null)
    {
        $categories = Category::withCount('products')->get();

        $selectedCategory = null;

        $query = Product::where('status', 1);

        // Category Filter
        if ($category) {
            $selectedCategory = Category::find($category);

            $query->where('category_id', $category);
        }

        // Search Filter
        if ($request->filled('search')) {

            $search = $request->search;

            $query->where(function ($q) use ($search) {

                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhereHas('category', function ($category) use ($search) {
                        $category->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $products = $query->latest()->paginate(6);

        // Latest Products for sidebar
        $latestProducts = Product::where('status', true)
            ->latest()
            ->take(3)
            ->get();

        return view('shop', compact(
            'products',
            'categories',
            'selectedCategory',
            'latestProducts'
        ));
    }

    // product detail
    function detail(int $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::withCount('products')->get();
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 1)
            ->latest()
            ->take(3)
            ->get();

        $latestProducts = Product::where('status', true)->latest()->take(3)->get();
        return view('detail', compact('product', 'categories', 'relatedProducts', 'latestProducts'));
    }
}
