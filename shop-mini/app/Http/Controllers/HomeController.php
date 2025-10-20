<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $collections = Banner::orderBy('sort_order')->limit(6)->get();

        $products = Product::latest()->limit(8)->get()->map(function($p) {
            return (object)[
                'slug' => $p->slug ?? 'san-pham',
                'brand' => $p->brand ?? 'E-Store',
                'name' => $p->name ?? 'Sản phẩm demo',
                'price' => $p->price ?? 0,
                'sale_price' => $p->sale_price ?? null,
                'cover' => $p->cover_url ?? '/images/default.jpg',
            ];
        });

        return view('home', compact('collections', 'products'));
    }
}