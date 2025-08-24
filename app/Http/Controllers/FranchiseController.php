<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;

class FranchiseController extends Controller
{
    public function store(Request $request)
    {
        Franchise::create($request->all());
        return back()->with('success', 'Pengajuan franchise berhasil dikirim!');
    }

    public function index()
    {
        $franchises = Franchise::latest()->get();
        return view('reqFranchise', compact('franchises'));
    }
}
