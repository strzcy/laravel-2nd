@extends('layouts.user')

@section('contents')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">Our Products</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse($products as $product)
            <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                {{-- Gambar Produk --}}
                <img src="{{ asset($product->image) }}"
                     alt="{{ $product->title }}"
                     class="w-full h-48 object-cover">

                <div class="p-4">
                    {{-- Nama Produk --}}
                    <h2 class="text-lg font-semibold">{{ $product->title }}</h2>

                    {{-- Harga --}}
                    <p class="text-gray-600">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

                    {{-- Tombol Detail --}}
                    <a href="{{ route('products.show', $product->id) }}"
                       class="mt-3 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        View Product
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-4 text-center text-gray-500">No products available</p>
        @endforelse
    </div>
</div>

<h2>Katalog Produk</h2>
<div style="display:flex; flex-wrap:wrap; gap:20px;">
    @foreach($products as $product)
        <div style="border:1px solid #ddd; padding:10px; width:200px; text-align:center;">
            <img src="{{ asset($product->image) }}" style="width:100%; height:150px; object-fit:cover;">
            <h4>{{ $product->title }}</h4>
            <p>Rp {{ number_format($product->price) }}</p>
        </div>
    @endforeach
</div>

<hr>

<div class="container">
    <h2>Pengajuan Franchise</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('reqFranchise') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Reason</label>
            <textarea name="reason" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Kirim Pengajuan</button>
    </form>

</div>

@endsection
