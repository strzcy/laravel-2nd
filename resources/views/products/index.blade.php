@extends('layouts.admin')
  
@section('title', 'Product List')
  
@section('contents')
    <hr />
    <div style="margin-bottom:20px;">
        <a href="{{ route('products.create') }}" 
            style="display:inline-block; padding:10px 15px; background:#4e73df; color:white; text-decoration:none; border-radius:6px;">+ Add Product</a>
    </div>
    <table style="width:100%; border-collapse:collapse; background:white; border-radius:8px; overflow:hidden;">
        <thead>
            <tr style="background:#f8f9fc; text-align:left;">
                <th style="padding:10px; border-bottom:1px solid #ddd;">No</th>
                <th style="padding:10px; border-bottom:1px solid #ddd;">Image</th>
                <th style="padding:10px; border-bottom:1px solid #ddd;">Title</th>
                <th style="padding:10px; border-bottom:1px solid #ddd;">Price</th>
                <th style="padding:10px; border-bottom:1px solid #ddd;">Product Code</th>
                <th style="padding:10px; border-bottom:1px solid #ddd;">Status</th>
                <th style="padding:10px; border-bottom:1px solid #ddd;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                {{-- Nomor urut --}}
                <td style="padding:10px; border-bottom:1px solid #eee;">{{ $loop->iteration }}</td>
                
                {{-- Foto Produk --}}
                <td style="padding:10px; border-bottom:1px solid #eee;">
                    @if($product->image)
                        <img src="{{ asset($product->image) }}" 
                            alt="{{ $product->title }}" 
                            style="width:60px; height:60px; object-fit:cover; border-radius:6px;">
                    @else
                        <span style="color:#999;">No Image</span>
                    @endif
                </td>

                <td style="padding:10px; border-bottom:1px solid #eee;">{{ $product->title }}</td>
                <td style="padding:10px; border-bottom:1px solid #eee;">{{ $product->price }}</td>
                <td style="padding:10px; border-bottom:1px solid #eee;">{{ $product->product_code }}</td>
                
                {{-- Status Produk --}}
                <td style="padding:10px; border-bottom:1px solid #eee;">
                    @if($product->status)
                        <span style="color:green;">Visible</span>
                    @else
                        <span style="color:red;">Hidden</span>
                    @endif
                </td>

                <td style="padding:10px; border-bottom:1px solid #eee;">
                    <a href="{{ route('products.show', $product->id) }}" style="margin-right:5px; color:#4e73df;">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" style="margin-right:5px; color:#f6c23e;">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this product?')" style="background:none; border:none; color:#e74a3b; cursor:pointer;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
