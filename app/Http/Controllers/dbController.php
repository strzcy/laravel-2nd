<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DbController extends Controller
{
    public function index()
    {
        // Hitung total profile (user)
        $profiles = User::count();

        // Hitung semua produk
        $allProducts = Product::count();

        // Hitung produk visible
        $visibleProducts = Product::where('status', 1)->count();

        // Hitung produk hidden
        $hiddenProducts = Product::where('status', 0)->count();

        // Hitung total omset (sum dari harga * stock)
        $omset = Product::sum(\DB::raw('price'));

        return view('dashboard', compact(
            'profiles',
            'allProducts',
            'visibleProducts',
            'hiddenProducts',
            'omset'
        ));
    }
}
