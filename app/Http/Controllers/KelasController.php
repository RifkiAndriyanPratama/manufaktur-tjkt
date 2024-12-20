<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(){
        $kelas = Kelas::all();
        return view("kelas.index",compact("kelas"));
    }
    
    public function create(){
        $kelas = Kelas::all();
        return view("kelas.create",compact("kelas"));
    }

    public function store(Request $request){
        // dd($request->all()); 
        
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'guru_pembimbing' => 'required|string|max:255',
            'materi_praktik' => 'required|string|max:255',
            'jam'=> 'required|string|max:255',
        ]);
    
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'guru_pembimbing' => $request->guru_pembimbing,
            'materi_praktik' => $request->materi_praktik,
            'jam'=> $request->jam,
        ]);
    
        return redirect()->route('kelas.index')->with('success', 'Kelas Ditambahkan');
    }

    public function edit($id_kelas){
        $kelas = kelas::find($id_kelas);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id_kelas){
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
            'guru_pembimbing' => 'required|string|max:255',
            'materi_praktik' => 'required|string|max:255',
            'jam'=> 'required|string|max:255',
        ]);

        $kelas = Kelas::find($id_kelas);
        $kelas->update($request->all());
        return redirect()->route('kelas.index')->with('success','kelas berhasil di Update');
    }

    public function destroy($id_kelas){
        Kelas::find($id_kelas)->delete();
        return redirect()->route('kelas.index')->with('success','Destroyed');
    }
}
