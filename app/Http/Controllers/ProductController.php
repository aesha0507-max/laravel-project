<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::when($request->category, function ($query, $category) {
            return $query->where('category', $category);
        })
            ->when($request->search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(12);

        return view('pages.products', compact('products'));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('pages.product-detail', compact('product', 'relatedProducts'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::query()
            ->when($query, function ($q) use ($query) {
                $q->where('name', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            })
            ->paginate(12);

        return view('pages.products', compact('products'));
    }
}
