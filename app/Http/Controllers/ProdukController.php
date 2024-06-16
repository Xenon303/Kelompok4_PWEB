<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all(); // Mengambil semua data produk dari database
        return view('produk', compact('produk'));
    }

    public function store(Request $request)
    {
        $produk = new Produk;
        $produk->nama_obat = $request->nama_obat;
        $produk->kategori_obat = $request->kategori_obat;
        $produk->stok = $request->stok;
        $produk->masa_kadaluarsa = $request->masa_kadaluarsa;
        $produk->save();

        return response()->json($produk);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->nama_obat = $request->nama_obat;
        $produk->kategori_obat = $request->kategori_obat;
        $produk->stok = $request->stok;
        $produk->masa_kadaluarsa = $request->masa_kadaluarsa;
        $produk->save();

        return response()->json($produk);
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return response()->json(['success' => 'Produk deleted successfully']);
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $produk = Produk::where('nama_obat', 'LIKE', "%{$query}%")
            ->orWhere('kategori_obat', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($produk);
    }
}
