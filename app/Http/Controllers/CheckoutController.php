<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
   public function index()
{
    $cart = session('cart', []);

    $subtotal = 0;
    $totalItems = 0;

    foreach ($cart as $item) {
        $subtotal += $item['price'] * $item['quantity'];
        $totalItems += $item['quantity'];
    }

    return view('pages.checkout', compact('cart', 'subtotal', 'totalItems'));
}
    public function process(Request $request)
    {

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email',
            'card_number' => 'required|numeric',
        ]);

        
        return back()->with('success', '');
    }
}