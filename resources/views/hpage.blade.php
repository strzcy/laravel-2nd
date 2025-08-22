{{-- resources/views/hpage.blade.php --}}
@extends('layouts.app')

@section('title', 'Home Page')

@section('contents')
    <div class="flex flex-col items-center justify-center min-h-[80vh]">
        <h1 class="text-2xl font-bold mb-6">Welcome to My App</h1>
        <div class="flex gap-4">
            <a 
                href="{{ route('login') }}" 
                class="px-6 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition"
            >
                Log in
            </a>

            <a 
                href="{{ route('register') }}" 
                class="px-6 py-2 rounded-lg bg-green-600 text-white hover:bg-green-700 transition"
            >
                Register
            </a>
        </div>
    </div>
@endsection
