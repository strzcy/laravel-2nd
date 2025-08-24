<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Franchise;

class FranchiseController extends Controller
{
    public function store(Request $request)
    {
        Franchise::create($request->all());
        return redirect()->back()->with('success', 'Request berhasil dikirim!');
    }

    public function index()
    {
        $requests = FranchiseRequest::latest()->get();
        return view('franchise.index', compact('requests'));
    }

}
