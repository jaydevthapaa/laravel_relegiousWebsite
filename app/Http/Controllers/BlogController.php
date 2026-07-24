<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function index()
    {
        $blogs = Blog::latest()->get();

        return view('blogs.index', compact('blogs'));
    }
    function create()
    {
        return view('blogs.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {

            $imageName = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName
        ]);

        return redirect('/blogs');
    }

    function edit(int $id)
    {
        $blog = Blog::findorFail($id);

        return view('blogs.edit', compact('blog'));
    }

    function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $blog->image = $request->file('image')->store('blogs', 'public');
        }
        $blog->title = $request->title;
        $blog->description = $request->description;

        $blog->save();
        return redirect('/blogs');
    }

    function destroy(int $id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();
        return redirect('/blogs')->with('success', 'Blog deleted successfully.');
    }
}
