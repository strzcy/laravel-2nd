<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductSettingsController extends Controller
{
    // list produk buat diatur visibility
    public function index()
{
    $products = Product::all();
    return view('products.settings', compact('products'));
}

public function updateVisibility(Request $request)
{
    $visibility = $request->input('visibility', []);

    // Semua produk jadi hidden dulu
    Product::query()->update(['status' => 0]);

    // Produk yang dicentang → visible
    foreach ($visibility as $productId => $val) {
        Product::where('id', $productId)->update(['status' => 1]);
    }

    return redirect()->back()->with('success', 'Product visibility updated!');
}

}
