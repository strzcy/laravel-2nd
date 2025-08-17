<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        // Ambil semua data user
        $users = User::all();

        // Kirim ke view profile
        return view('profile', compact('users'));
    }

    public function destroy($id)
    {
        // Cari user berdasarkan id
        $user = User::findOrFail($id);

        // Hapus user
        $user->delete();

        // Balik lagi ke halaman profile
        return redirect()->route('profile.index')->with('success', 'User berhasil dihapus!');
    }
}
