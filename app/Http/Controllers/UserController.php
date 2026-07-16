<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Event;

class Usercontroller extends Controller
{
    //
    function home(){

        $event =Event::where('status','Upcoming')
        ->latest()->take(3)->get();
        return view('home');
    }
    function about(){
        return view('about');
    }

    function blog_detail(){
        return view('blog_detail');
    }

    function blog(){
        return view('blog');
    }

    function cart(){
        return view('cart');    
    }

    function checkout(){
        return view('checkout');
    }

    function detail(){
        return view('detail');
    }

    function donation(){
        return view('donation');
    }

    function donation_detail(){
        return view('donation_detail');
    }

    function event_detail(){
        return view('event_detail');
    }

    function event(){
        return view('event');
    }

    function faq(){
        return view('faq');
    }

    function login(){
        return view('login');
    }

    function shop(){
        return view('shop');
    }

    function authenticate(Request $request){
        $credentials = $request-> validate([

        'email'=> 'required|email',
        'password'=> 'required',
        ]);
        if (Auth::attempt([
            'email'=> $credentials['email'],
            'password'=> $credentials['password']
        ])){
            $request -> session()-> regenerate();
            return redirect('/');
        }

        return back()-> withErrors([
            'username' => 'Invalid email or password. Check it once.',
        ]);
    }

    function registerUser(Request $request){
        $validated = $request -> validate([
            'first_name' => 'required|string|max:250',
            'last_name'=> 'required|string|max:255',
            'email'=> 'required|email|unique:users,email',
            'password'=> 'required|min:6',
        ]);

        $user = User::create([
            'name'=> $validated['first_name'] . ' ' . $validated['last_name'],
            'email' => $validated['email'],
            'password'=> Hash::make($validated['password']),
        ]);

        Auth::login($user);
        return redirect('/');
    }

    function logout(Request $request){
        Auth::logout();
        $request -> session()-> invalidate();
        $request -> session() -> regenerateToken();

        return redirect('/');
    }

    function team(){
        return view('team');
    }


}
