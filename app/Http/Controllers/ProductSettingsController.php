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
        return view('admin.product_settings.index', compact('products'));
    }

    // update visibility
    public function updateVisibility(Request $request, Product $product)
    {
        $product->visibility = $request->visibility;
        $product->save();

        return redirect()->back()->with('success', 'Visibility updated!');
    }
}
