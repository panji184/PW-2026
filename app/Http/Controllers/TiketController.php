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
        $request->validate([
            'maskapai' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric',
        ]);

        Tiket::create($request->all());

        return redirect()->route('tiket.index')
                         ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        return view('tiket.edit', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'maskapai' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'tanggal' => 'required|date',
            'harga' => 'required|numeric',
        ]);

        $tiket = Tiket::findOrFail($id);

        $tiket->update($request->all());

        return redirect()->route('tiket.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();

        return redirect()->route('tiket.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}