<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaController extends Controller
{
    public function index(){
        $siswa = siswa::all();
        $kelas = kelas::all();
        $siswa = siswa::orderBy('id_siswa', 'asc')->get();
        return view("admin.siswa", compact("siswa", "kelas"));
    }


    public function store(Request $request){
    // dd($request->all()); 
    
    $request->validate([
        'nama_siswa' => 'required|string|max:255',
        'id_kelas' => 'required|exists:kelas,id_kelas',
    ]);

    siswa::create([
        'nama_siswa' => $request->nama_siswa,
        'id_kelas' => $request->id_kelas,
    ]);

    return redirect()->route('siswa.index')->with('success', 'siswa Ditambahkan');
    }

    public function edit($id_siswa){
        $kelas = Kelas::all();
        $siswa = siswa::find($id_siswa);
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    public function update(Request $request, $id_siswa){
    $request->validate([
        'nama_siswa' => 'required|string|max:255',
        'id_kelas' => 'required|exists:kelas,id_kelas',
    ]);

    $siswa = Siswa::find($id_siswa);
    $siswa->update($request->all());
    return redirect()->route('siswa.index')->with('success','siswa berhasil di Update');
    }

    public function destroy($id_siswa){
        Siswa::find($id_siswa)->delete();
        return redirect()->route('siswa.index')->with('success','Destroyed');
    }
}
