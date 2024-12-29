<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class BarangController extends Controller
{
    public function index(Request $request){
        $query = Barang::with('kategori');
        
        if ($request->filled('id_kategori') && $request->id_kategori != 'all') {
            $query->where('id_kategori', $request->id_kategori);
        }
        
        if ($request->filled('search')) {
            $query->where('nama_barang', 'like', '%' . $request->search . '%')
                  ->orWhereHas('kategori', function ($q) use ($request) {
                      $q->where('nama_kategori', 'like', '%' . $request->search . '%');
                  });
        }
        
        $barang = $query->orderBy('id_barang', 'asc')->get();
        $kategori = Kategori::all();    
    
        return view('admin.management', compact('barang', 'kategori'));
    }


    

    public function create(){
        $kategori = Kategori::all();
        return view("barang.create", compact("kategori")); 
    }

    public function store(Request $request){
    // dd($request->all()); 
    
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'id_kategori' => 'required|exists:kategori,id_kategori',
    ]);

    Barang::create([
        'nama_barang' => $request->nama_barang,
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
