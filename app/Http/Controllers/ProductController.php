<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show(string $slug)
    {
        $product = Product::query()
            ->where('slug', $slug)
            ->where('is_active', true)
            ->with([
                'category',
                'brand',
                'images',
                'variants.attributeValues.attribute',
            ])
            ->firstOrFail();

        return view('products.show', [
            'product' => $product,
        ]);
    }
}