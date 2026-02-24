<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        $tikets = Tiket::all();
        return view('tiket.index', compact('tikets'));
    }

    public function store(Request $request)
    {
        Tiket::create($request->all());
        return redirect()->back();
    }

    public function destroy($id)
    {
        Tiket::destroy($id);
        return redirect()->back();
    }
}