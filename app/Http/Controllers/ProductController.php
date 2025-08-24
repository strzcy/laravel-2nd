<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'price'        => 'required|numeric',
            'product_code' => 'required|string|max:100',
            'description'  => 'nullable|string',
            'image'        => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $data = $request->only(['title','price','product_code','description']);

        if ($request->hasFile('image')) {
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/products'), $fileName);
            $data['image'] = 'uploads/products/' . $fileName;
        }

        Product::create($data);

        return redirect()->route('products')->with('success', 'Product added successfully');
    }


  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'  => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $product = Product::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/products'), $fileName);
            $data['image'] = 'uploads/products/' . $fileName;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'product deleted successfully');
    }

    public function toggleStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->status = !$product->status; // toggle true/false
        $product->save();

        return response()->json(['success' => true, 'status' => $product->status]);
    }

    public function settings()
    {
        $products = \App\Models\Product::all(); // ambil semua produk
        return view('products.settings', compact('products'));
    }

    



}