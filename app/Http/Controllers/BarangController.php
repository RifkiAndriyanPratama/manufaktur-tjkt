<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        $barang = Barang::orderBy('id_barang', 'asc')->get();
        return view("barang.index", compact("barang"));
    }

    public function create(){
        $kategori = Kategori::all();
        return view("barang.create", compact("kategori")); 
    }

    public function store(Request $request){
    // dd($request->all()); 
    
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'stok' => 'required|integer|min:0',
        'id_kategori' => 'required|exists:kategori,id_kategori',
    ]);

    Barang::create([
        'nama_barang' => $request->nama_barang,
        'stok' => $request->stok,
        'id_kategori' => $request->id_kategori,
    ]);

    return redirect()->route('barang.index')->with('success', 'Barang Ditambahkan');
    }

    public function edit($id_barang){
        $kategori = Kategori::all();
        $barang = Barang::find($id_barang);
        return view('barang.edit', compact('barang', 'kategori'));
    }

    public function update(Request $request, $id_barang){
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'stok' => 'required|integer|min:0',
        'id_kategori' => 'required|exists:kategori,id_kategori',
    ]);

    $barang = Barang::find($id_barang);
    $barang->update($request->all());
    return redirect()->route('barang.index')->with('success','Barang berhasil di Update');
    }

    public function destroy($id_barang){
        Barang::find($id_barang)->delete();
        return redirect()->route('barang.index')->with('success','Destroyed');
    }
}
