<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use PDF;

class PemesananController extends Controller
{
    public function index()
    {
        $data = Pemesanan::all(); // Ambil semua data
        return view('penerbangan.index', compact('data'));
    }

    public function store(Request $request)
    {
        Pemesanan::create($request->all());
        return redirect()->route('penerbangan.index');
    }

    public function edit($id)
    {
        $edit_data = Pemesanan::findOrFail($id);
        $data = Pemesanan::all();
        return view('penerbangan.index', compact('data', 'edit_data'));
    }

    public function update(Request $request, $id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->update($request->all());
        return redirect()->route('penerbangan.index');
    }

    public function destroy($id)
    {
        Pemesanan::destroy($id);
        return redirect()->route('penerbangan.index');
    }

    public function cetakPdf()
    {
        $data = Pemesanan::all();
        $pdf = PDF::loadView('penerbangan.pdf', compact('data'));
        return $pdf->stream('data_pemesanan.pdf');
    }
}
