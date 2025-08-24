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
@endsection
