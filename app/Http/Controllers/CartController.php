<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // add 
    function add(Request $request, int $id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        $quantity = $request->quantity ?? 1;

        // Check requested quantity against stock
        if ($quantity > $product->stock) {

            return back()->with('error', 'Not enough stock available.');
        }

        if (isset($cart[$id])) {

            // Total quantity after adding
            $newQuantity = $cart[$id]['quantity'] + $quantity;

            if ($newQuantity > $product->stock) {

                return back()->with('error', 'Cannot add more than available stock.');
            }

            $cart[$id]['quantity'] = $newQuantity;
        } else {

            $cart[$id] = [

                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => $quantity,
                'stock' => $product->stock

            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Product added to cart.');
    }

    // update
    function update(Request $request, int $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, $request->quantity);
            session()->put('cart', $cart);
        }
        return redirect()->back();
    }
    // increase
    function increase(int $id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            if ($cart[$id]['quantity'] < $product->stock) {

                $cart[$id]['quantity']++;

                session()->put('cart', $cart);
            } else {

                return back()->with('error', 'Maximum stock reached.');
            }
        }

        return back();
    }

    // decrease

    function decrease(int $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {

            if ($cart[$id]['quantity'] > 1) {
                $cart[$id]['quantity']--;
            }

            session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    // remove
    function remove(int $id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back();
    }
}
