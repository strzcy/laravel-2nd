@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Data Pengajuan Franchise</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Alasan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $r)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $r->name }}</td>
                <td>{{ $r->email }}</td>
                <td>{{ $r->phone }}</td>
                <td>{{ $r->address }}</td>
                <td>{{ $r->reason }}</td>
                <td>{{ $r->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
