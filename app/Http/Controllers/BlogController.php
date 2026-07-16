<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    function index(){
        $blogs = Blog::latest()->get();

    return view('blogs.index', compact('blogs'));
    }
    function create(){
        return view('blogs.create');
    }

    function store(Request $request){
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
    
}
