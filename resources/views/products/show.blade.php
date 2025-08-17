@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 style="margin-bottom:0;">Detail Product</h1>
    <hr />
    <div style="display:flex; gap:20px; margin-bottom:20px;">
        <div style="flex:1;">
            <label style="display:block; font-weight:bold;">Title</label>
            <input type="text" value="{{ $product->title }}" readonly 
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
        </div>
        <div style="flex:1;">
            <label style="display:block; font-weight:bold;">Price</label>
            <input type="text" value="{{ $product->price }}" readonly
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
        </div>
    </div>
    <div style="display:flex; gap:20px; margin-bottom:20px;">
        <div style="flex:1;">
            <label style="display:block; font-weight:bold;">Product Code</label>
            <input type="text" value="{{ $product->product_code }}" readonly
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
        </div>
        <div style="flex:1;">
            <label style="display:block; font-weight:bold;">Description</label>
            <textarea readonly
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px; min-height:80px;">{{ $product->description }}</textarea>
        </div>
    </div>
    <div style="display:flex; gap:20px;">
        <div style="flex:1;">
            <label style="display:block; font-weight:bold;">Created At</label>
            <input type="text" value="{{ $product->created_at }}" readonly
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
        </div>
        <div style="flex:1;">
            <label style="display:block; font-weight:bold;">Updated At</label>
            <input type="text" value="{{ $product->updated_at }}" readonly
                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:6px;">
        </div>
    </div>
@endsection