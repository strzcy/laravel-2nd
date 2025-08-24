@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pengajuan Franchise</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('franchise.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Usaha</label>
            <input type="text" name="nama_usaha" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kontak</label>
            <input type="text" name="kontak" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Kirim Pengajuan</button>
    </form>
</div>
@endsection
