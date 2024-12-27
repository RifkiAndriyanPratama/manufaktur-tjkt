<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index(Request $request){
        $query = Kelas::query();

        if ($request->has('search') && !empty($request->search)) {
            $query->where('nama_kelas', 'ilike', '%' . $request->search . '%');
        }

        $kelas = $query->get();
    
        return view("admin.kelas",compact("kelas"));
    }
    
    public function create(){
        $kelas = Kelas::all();
        return view("kelas.create",compact("kelas"));
    }

    public function store(Request $request){
        // dd($request->all()); 
        
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ]);
    
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
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
