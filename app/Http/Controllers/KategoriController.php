<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        $kategori = Kategori::orderBy('id_kategori', 'asc')->get();
        return view("admin.kategori",compact("kategori"));
    }

    public function create(){
        return view("kategori.create");
    }

    public function store(Request $request){
        $request->validate([
            "nama_kategori"=> "required",
        ]);

        $kategori = Kategori::create([
            "nama_kategori"=> $request->nama_kategori
        ]);

        return redirect()->route('kategori.index')->with("success","Kategori Ditambahkan");
    }

    public function edit($id_kategori){
        $kategori = Kategori::find($id_kategori);
        return view("kategori.edit",compact("kategori"));
    }

    public function update(request $request, $id_kategori){
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);
    
        $kategori = Kategori::find($id_kategori);
        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with('success','Kategori berhasil di Update');
    }

    public function destroy($id_kategori){
        Kategori::find($id_kategori)->delete();
        return redirect()->route('kategori.index')->with('success','Destroyed');
    }
}
