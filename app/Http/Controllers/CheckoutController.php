<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    function index()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect('/cart')->with('error', 'Your cart is empty.');
        }

        $subtotal = 0;

        foreach ($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }

        return view('checkout', compact('cart', 'subtotal'));
    }

    // place order
    function placeOrder(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'phone'      => 'required|string|max:20',
            'email'      => 'required|email',
            'country'    => 'required|string|max:255',
            'city'       => 'required|string|max:255',
            'state'      => 'required|string|max:255',
            'street'     => 'required|string|max:255',
            'postcode'   => 'required|string|max:20',
            'payment_method' => 'required',
            'notes' => 'nullable|string'
        ]);

        $cart = session() ->get('cart', []);

        if (empty($cart)){
            return redirect('cart')->with('error', 'Your cart is empty.');
        }

    }
}
