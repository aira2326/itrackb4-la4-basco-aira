<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'Laptop',
                'price' => 45000,
                'quantity' => 5
            ],
            [
                'name' => 'Keyboard',
                'price' => 1500,
                'quantity' => 10
            ],
            [
                'name' => 'Mouse',
                'price' => 800,
                'quantity' => 15
            ],
        ];

        return view('products.index', [
            'products' => $products
        ]);
    }
}