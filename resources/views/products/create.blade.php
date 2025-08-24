@extends('layouts.admin')
  
@section('title', 'Add Product')
  
@section('contents')
    <h1 style="margin-bottom:0;">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" style="display:block; max-width:800px;">
        @csrf
        <div style="display:flex; gap:20px; margin-bottom:20px;">
            <input type="text" name="title" placeholder="Title"
                style="flex:1; padding:8px; border:1px solid #ccc; border-radius:6px;">
            <input type="text" name="price" placeholder="Price"
                style="flex:1; padding:8px; border:1px solid #ccc; border-radius:6px;">
        </div>

        <div style="display:flex; gap:20px; margin-bottom:20px;">
            <input type="text" name="product_code" placeholder="Product Code"
                style="flex:1; padding:8px; border:1px solid #ccc; border-radius:6px;">
            <textarea name="description" placeholder="Description"
                style="flex:1; padding:8px; border:1px solid #ccc; border-radius:6px; min-height:80px;"></textarea>
        </div>

        {{-- Upload Foto --}}
        <div style="margin-bottom:20px;">
            <label for="image">Product Image</label><br>
            <input type="file" name="image" accept="image/*"
                style="padding:8px; border:1px solid #ccc; border-radius:6px;">
        </div>

        {{-- Status Produk --}}
        <div style="margin-bottom:20px;">
            <label for="status">Status</label><br>
            <select name="status" style="padding:8px; border:1px solid #ccc; border-radius:6px;">
                <option value="1">Visible</option>
                <option value="0">Hidden</option>
            </select>
        </div>

        <div>
            <button type="submit" style="width:100%; padding:10px; background:#4e73df; color:white; border:none; border-radius:6px; cursor:pointer;">Submit</button>
        </div>
    </form>
@endsection
