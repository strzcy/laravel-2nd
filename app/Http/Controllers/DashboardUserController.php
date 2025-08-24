<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        // Tampilkan hanya produk yang Visible
        // Pakai kolom 'status' == 1 (kalau kamu pakai 'visibility', ganti jadi where('visibility', 1))
        $products = Product::where('status', 1)->latest()->get();

        return view('db', compact('products'));
    }
}