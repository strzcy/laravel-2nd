@extends('layouts.user')

@section('contents')

<div class="container" style="font-family: 'Poppins', sans-serif;">

    {{-- HEADER --}}
    <div style="background:#d81900ff; padding:30px; border-radius:20px; color:white; text-align:center; margin-bottom:30px;">
        <h1 style="font-size:32px; letter-spacing:2px;"> Wall's Makes Everyone Happy</h1>
        <p style="max-width:600px; margin:0 auto;">Choose your favorite ice cream, from Wall's Feast, Paddle Pop, Cornetto, to Magnum it's all here!</p>
    </div>

    <div class="catalog-container">
    <!-- Produk utama -->
    <div class="main-product background-image:'storage/magnum.jpg';">
        <h2>I JO ROW YOU</h2>
        <p>LIMITED EDITION</p>
    </div>

    <!-- Varian produk -->
    <div class="variants">
        <div class="variant">
            <img src="/images/pichy.png" alt="Pichy">
            <div class="variant-footer">
                <span>PICHY</span>
            </div>
        </div>
        <div class="variant">
            <img src="/images/blusky.png" alt="Blusky">
            <div class="variant-footer">
                <span>BLUSKY</span>

            </div>
        </div>
        <div class="variant">
            <img src="/images/purply.png" alt="Purply">
            <div class="variant-footer">
                <span>PURPLY</span>
            </div>
        </div>
        <div class="variant">
            <img src="/images/yellows.png" alt="Yellows">
            <div class="variant-footer">
                <span>YELLOWS</span>
            </div>
        </div>
    </div>
</div>

    {{-- PRODUK --}}
    <h2 style="margin-bottom:20px; font-weight:bold; text-align:center;">Katalog Produk</h2>
    <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(220px, 1fr)); gap:25px;">
        @foreach($products as $product)
        <div style="background:white; border-radius:20px; overflow:hidden; box-shadow:0 5px 15px rgba(0,0,0,0.1); transition:0.3s;">
            <div style="background:#f4f9f9; padding:15px; text-align:center;">
                <img src="{{ asset($product->image) }}" style="width:100%; height:180px; object-fit:cover; border-radius:15px;">
            </div>
            <div style="padding:15px; text-align:center;">
                <h4 style="margin-bottom:5px;">{{ $product->title }}</h4>
                <p style="color:#d81900ff; font-weight:bold;">Rp {{ number_format($product->price) }}</p>
                <button style="background:#d81900ff; color:white; border:none; padding:8px 20px; border-radius:10px; cursor:pointer;">View</button>
            </div>
        </div>
        @endforeach
    </div>

    <hr style="margin:50px 0;">

    {{-- FRANCHISE FORM --}}
    <div style="background:#d81900ff; color:white; padding:30px; border-radius:20px; box-shadow:0 5px 15px rgba(0,0,0,0.2);">
        <h2 style="text-align:center; margin-bottom:20px;">Pengajuan Franchise</h2>

        @if(session('success'))
            <div style="background:#28a745; padding:10px; border-radius:10px; text-align:center; margin-bottom:15px;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('reqFranchise') }}" method="POST" style="max-width:600px; margin:0 auto;">
            @csrf
            <div style="margin-bottom:15px;">
                <label>Nama Usaha</label>
                <input type="text" name="name" class="form-control" required style="width:100%; padding:10px; border-radius:10px; border:none; margin-top:5px;">
            </div>
            <div style="margin-bottom:15px;">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required style="width:100%; padding:10px; border-radius:10px; border:none; margin-top:5px;">
            </div>
            <div style="margin-bottom:15px;">
                <label>Kontak</label>
                <input type="text" name="phone" class="form-control" required style="width:100%; padding:10px; border-radius:10px; border:none; margin-top:5px;">
            </div>
            <div style="margin-bottom:15px;">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control" required style="width:100%; padding:10px; border-radius:10px; border:none; margin-top:5px;">
            </div>
            <div style="margin-bottom:15px;">
                <label>Alasan</label>
                <textarea name="reason" class="form-control" rows="3" style="width:100%; padding:10px; border-radius:10px; border:none; margin-top:5px;"></textarea>
            </div>

            <button type="submit" style="background:#f4f9f9; color:#d81900ff; border:none; padding:12px 25px; border-radius:15px; font-weight:bold; cursor:pointer; width:100%;">Kirim Pengajuan</button>
        </form>
    </div>
</div>

@endsection
