<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise; // pastiin ini ada ya

class FranchiseController extends Controller
{
    public function store(Request $request)
    {
        Franchise::create($request->all());
        return redirect()->back()->with('success', 'Request berhasil dikirim!');
    }

    public function index()
    {
        // pake Franchise, bukan FranchiseRequest
        $requests = Franchise::latest()->get();
        return view('reqFranchise', compact('requests'));
    }
}
