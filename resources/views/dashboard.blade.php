@extends('layouts.admin')
  
@section('title', 'Dashboard')
  
@section('contents')
<hr>
  <div class="row" style="padding-top:20px;">

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 35px;">
      <div style="background:white; padding:35px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#d81900ff;">Profile</h3>
        <p style="font-size:24px; margin:10px 0 0;">{{ $profiles }}</p>
      </div>
      <div style="background:white; padding:35px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#d81900ff;">All Products</h3>
        <p style="font-size:24px; margin:10px 0 0;">{{ $allProducts }}</p>
      </div>
      <div style="background:white; padding:35px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#d81900ff;">Visible Product</h3>
        <p style="font-size:24px; margin:10px 0 0;">{{ $visibleProducts }}</p>
      </div>
      <div style="background:white; padding:35px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#d81900ff;">Hidden Product</h3>
        <p style="font-size:24px; margin:10px 0 0;">{{ $hiddenProducts }}</p>
      </div>
      <div style="background:white; padding:35px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#d81900ff;">Omset</h3>
        <p style="font-size:24px; margin:10px 0 0;">Rp {{ number_format($omset, 0, ',', '.') }}</p>
      </div>
    </div>


  </div>
@endsection
