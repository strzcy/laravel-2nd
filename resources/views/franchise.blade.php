@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pengajuan Franchise</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('reqFranchise') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
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
