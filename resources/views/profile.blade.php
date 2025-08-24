@extends('layouts.admin')

@section('title', 'Profile')

@section('contents')
    <div style="padding:20px;">
        <h2 style="margin-bottom:20px;">Daftar User</h2>

        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        <table border="1" cellspacing="0" cellpadding="10" style="width:100%; border-collapse: collapse;">
            <tr style="background-color: #f2f2f2;">
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password (Hashed)</th>
                <th>Aksi</th>
            </tr>
            @foreach($users as $user)
            <tr>
                {{-- Nomor urut --}}
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ substr($user->password, 0, 10) . '...' }}</td>
                <td>
                    <form action="{{ route('profile.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin mau hapus user ini?')" type="submit" style="background:red; color:white; border:none; padding:5px 10px; cursor:pointer;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
