@extends('layouts.admin')
  
@section('title', 'Dashboard')
  
@section('contents')
  <div class="row">

    <!-- Statistik Cards -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px;">
      <div style="background:white; padding:20px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#4e73df;">👤 Users</h3>
        <p style="font-size:24px; margin:10px 0 0;">150</p>
      </div>
      <div style="background:white; padding:20px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#4e73df;">📦 Products</h3>
        <p style="font-size:24px; margin:10px 0 0;">75</p>
      </div>
      <div style="background:white; padding:20px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#4e73df;">💵 Sales</h3>
        <p style="font-size:24px; margin:10px 0 0;">Rp 12.500.000</p>
      </div>
      <div style="background:white; padding:20px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
        <h3 style="margin:0; color:#4e73df;">⭐ Feedback</h3>
        <p style="font-size:24px; margin:10px 0 0;">320</p>
      </div>
    </div>

    <!-- Tabel Data -->
    <div style="background:white; padding:20px; border-radius:12px; box-shadow:0 2px 5px rgba(0,0,0,0.1);">
      <h2 style="margin-top:0; margin-bottom:15px; color:#333;">📊 Recent Products</h2>
      <table style="width:100%; border-collapse:collapse;">
        <thead>
          <tr style="background:#f8f9fc; text-align:left;">
            <th style="padding:10px; border-bottom:1px solid #ddd;">ID</th>
            <th style="padding:10px; border-bottom:1px solid #ddd;">Name</th>
            <th style="padding:10px; border-bottom:1px solid #ddd;">Price</th>
            <th style="padding:10px; border-bottom:1px solid #ddd;">Stock</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="padding:10px; border-bottom:1px solid #eee;">1</td>
            <td style="padding:10px; border-bottom:1px solid #eee;">Laptop</td>
            <td style="padding:10px; border-bottom:1px solid #eee;">Rp 8.500.000</td>
            <td style="padding:10px; border-bottom:1px solid #eee;">12</td>
          </tr>
          <tr>
            <td style="padding:10px; border-bottom:1px solid #eee;">2</td>
            <td style="padding:10px; border-bottom:1px solid #eee;">Smartphone</td>
            <td style="padding:10px; border-bottom:1px solid #eee;">Rp 3.200.000</td>
            <td style="padding:10px; border-bottom:1px solid #eee;">30</td>
          </tr>
          <tr>
            <td style="padding:10px;">3</td>
            <td style="padding:10px;">Headset</td>
            <td style="padding:10px;">Rp 250.000</td>
            <td style="padding:10px;">100</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
@endsection
