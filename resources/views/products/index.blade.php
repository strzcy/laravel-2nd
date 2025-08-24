@extends('layouts.admin')
  
@section('title', 'Product List')
  
@section('contents')
<hr>
    <div style="">
        <h2 style="margin-bottom:20px;">Daftar Produk</h2>

        <div style="margin-bottom:20px;">
            <a href="{{ route('products.create') }}" 
                style="display:inline-block; padding:8px 12px; background:#4e73df; color:white; text-decoration:none; border-radius:4px;">+ Add Product</a>
        </div>

        <table border="1" cellspacing="0" cellpadding="10" style="width:100%; border-collapse: collapse;">
            <tr style="background-color: #f2f2f2;">
                <th>No</th>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
                <th>Product Code</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
            <tr>
                {{-- Nomor urut --}}
                <td class='but'>{{ $loop->iteration }}</td>
                
                {{-- Foto Produk --}}
                <td>
                    @if($product->image)
                        <img src="{{ asset($product->image) }}" 
                            alt="{{ $product->title }}" 
                            style="width:60px; height:60px; object-fit:cover; border-radius:4px;">
                    @else
                        <span class='but' style="color:#999;">No Image</span>
                    @endif
                </td>

                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->product_code }}</td>
                
                {{-- Status Produk --}}
                <td>
                    @if($product->status)
                        <span style="color:green;">Visible</span>
                    @else
                        <span style="color:red;">Hidden</span>
                    @endif
                </td>

                <td class='but'>
                    <a href="{{ route('products.show', $product->id) }}" style="text-decoration:none; font-size:15px; background:#4e73df; color:white; border:none; padding:5px 10px; cursor:pointer;">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" style="text-decoration:none; font-size:15px; background:#f6c23e; color:black; border:none; padding:5px 10px; cursor:pointer;">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this product?')" style="font-size:15px; background:red; color:white; border:none; padding:5px 10px; cursor:pointer;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
