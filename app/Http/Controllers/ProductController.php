<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Contoh data dummy
        $data = [
            ['id' => 1, 'produk' => 'Buket Mawar'],
            ['id' => 2, 'produk' => 'Buket Snack'],
            ['id' => 3, 'produk' => 'Buket Boneka']
        ];

        // Kirim data ke view list_product
        return view('list_product', compact('data'));
    }
}
