<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::query()
            ->where('is_active', true)
            ->with(['category', 'brand', 'images', 'variants'])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->take(8)
            ->get();

        return view('home', [
            'products' => $products,
        ]);
    }
}