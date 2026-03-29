<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::take(4)->get();

        $saleProducts = Product::where('badge', 'sale')->take(4)->get();

        $categories = ['Audio', 'Wearables', 'Gaming', 'Fashion'];

        return view('pages.home', compact('featuredProducts', 'saleProducts', 'categories'));
    }
}