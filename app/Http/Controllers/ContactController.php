<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Contact;

class ContactController extends Controller
{
    function contact(){
        return view('contact');
    }

    function storeContact(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'service' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    Contact::create($validated);

    return redirect('/contact')->with('success', 'Message sent successfully.');
}
}
