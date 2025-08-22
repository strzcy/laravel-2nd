@extends('layouts.app') {{-- kalau kamu sudah punya layout utama --}}

@section('title', 'User Dashboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-body">
            <h2 class="mb-3">Selamat Datang, {{ Auth::user()->name }} 🎉</h2>
            <p class="text-muted">Kamu berhasil login sebagai <strong>User</strong>.</p>
            
            <hr>

            <h4>Menu User</h4>
            <ul>
                <li><a href="#">Riwayat Aktivitas</a></li>
                <li><a href="{{ route('logout') }}" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a></li>
            </ul>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
@endsection
