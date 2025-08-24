@extends('layouts.admin')

@section('title', 'Product Settings')

@section('contents')
    <div style="padding:20px;">
        <h2 style="margin-bottom:20px;">Product Visibility Settings</h2>

        <table border="1" cellspacing="0" cellpadding="10" style="width:100%; border-collapse: collapse;">
            <tr style="background-color: #f8f9fc;">
                <th>No</th>
                <th>Title</th>
                <th>Status</th>
                <th>Toggle</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->title }}</td>
                <td>
                    @if($product->status)
                        <span style="color:green;">Visible</span>
                    @else
                        <span style="color:red;">Hidden</span>
                    @endif
                </td>
                <td>
                    <label class="switch">
                        <input type="checkbox" class="toggle-status" data-id="{{ $product->id }}" {{ $product->status ? 'checked' : '' }}>
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

    <style>
        /* Toggle Switch CSS */
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }
        .switch input {display:none;}
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #4e73df;
        }
        input:checked + .slider:before {
            transform: translateX(26px);
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('change', '.toggle-status', function() {
            let productId = $(this).data('id');
            
            $.ajax({
                url: '/products/' + productId + '/toggle-status',
                type: 'PATCH',
                data: {_token: '{{ csrf_token() }}'},
                success: function(response) {
                    if(response.success) {
                        location.reload(); // refresh biar status teks ikut berubah
                    }
                }
            });
        });
    </script>
@endsection
