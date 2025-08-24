@extends('layouts.user') {{-- kalau kamu sudah punya layout utama --}}

@section('title', 'User Dashboard')

@section('content')
<div class="card mt-4">
    <div class="card-header">
        <h5>Form Pengajuan Franchise</h5>
    </div>
    <div class="card-body">
        <form action="/franchise" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label>Alasan Bergabung</label>
                <textarea name="reason" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajukan Franchise</button>
        </form>
    </div>
</div>

@endsection
