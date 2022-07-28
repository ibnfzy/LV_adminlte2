<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Table Barang',
            'barang' => Barang::all()
        ];

        return view('barang', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Barng'
        ];

        return view('barang-create', $data);
    }

    public function store(Request $request)
    {
        // $barang = new Barang();

        $data = [
            'nama_barang' => $request->barang,
            'stok_barang' => $request->stok
        ];

        Barang::create($data);

        return redirect()->route('barang.index');
    }

    public function edit(Barang $barang)
    {
        $data = [
            'title' => 'Edit Barang'
        ];

        return view('barang-edit', $data, compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'nama_barang' => $request->barang,
            'stok_barang' => $request->stok
        ];

        Barang::where('id', $id)
            ->update($data);

        return redirect()->route('barang.index');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index');
    }
}