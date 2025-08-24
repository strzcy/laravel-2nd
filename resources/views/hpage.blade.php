<!-- {{-- resources/views/hpage.blade.php --}} -->
@extends('layouts.app')

@section('title', 'Home Page')

@section('contents')
    <div class="flex flex-col items-center justify-center min-h-[80vh] 
                bg-gradient-to-b from-white to-[#fff5f4]">
        
        {{-- Judul --}}
        <h1 class="text-4xl font-extrabold mb-4 text-[#d81900ff] tracking-wide">
            Welcome to My App
        </h1>
        <p class="text-gray-600 mb-8 text-center max-w-md">
            Temukan berbagai fitur menarik dan kemudahan hanya di sini ✨
        </p>

        {{-- Tombol --}}
        <div class="flex gap-4">
            <a 
                href="{{ route('login') }}" 
                class="px-6 py-2 rounded-lg bg-[#d81900ff] text-white 
                       hover:bg-[#b71500] transition shadow-md"
            >
                Log in
            </a>

            <a 
                href="{{ route('register') }}" 
                class="px-6 py-2 rounded-lg border-2 border-[#d81900ff] text-[#d81900ff] 
                       hover:bg-[#d81900ff] hover:text-white transition shadow-md"
            >
                Register
            </a>
        </div>
    </div>
@endsection
