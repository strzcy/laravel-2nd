@extends('layouts.admin')
  
@section('title')
  
@section('contents')
    <h1 style="margin-bottom:0;">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST" style="display:block; max-width:800px;">
        @csrf
        @method('PUT')
        <div style="display:flex; gap:20px; margin-bottom:20px;">
            <div style="flex:1;">
                <label style="font-weight:bold;">Title</label>
                <input type="text" name="title" value="{{ $product->title }}"
                    style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
            </div>
            <div style="flex:1;">
                <label style="font-weight:bold;">Price</label>
                <input type="text" name="price" value="{{ $product->price }}"
                    style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
            </div>
        </div>
        <div style="display:flex; gap:20px; margin-bottom:20px;">
            <div style="flex:1;">
                <label style="font-weight:bold;">Product Code</label>
                <input type="text" name="product_code" value="{{ $product->product_code }}"
                    style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
            </div>
            <div style="flex:1;">
                <label style="font-weight:bold;">Description</label>
                <textarea name="description"
                    style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px; min-height:80px;">{{ $product->description }}</textarea>
            </div>
        </div>
        <div>
            <button type="submit" style="width:100%; padding:10px; background:#f6c23e; color:white; border:none; border-radius:6px; cursor:pointer;">Update</button>
        </div>
    </form>
@endsection
