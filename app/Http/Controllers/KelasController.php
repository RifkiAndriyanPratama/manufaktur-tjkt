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

    public function search(Request $request){
        if ($request->ajax()) {
            $output = '';
    
            $query = Kelas::query(); 
    
            if ($request->has('search') && !empty($request->search)) {
                $query->where('nama_kelas', 'ilike', '%' . $request->search . '%');
            }
    
            $kelas = $query->get();
    
            if ($kelas->isNotEmpty()) {
                foreach ($kelas as $index => $item) {
                    $output .= '<tr class="' . ($index % 2 == 0 ? 'bg-gray-200' : 'bg-gray-100') . ' hover:bg-blue-200">' .
                        '<td class="px-4 py-2">' . ($index + 1) . '</td>' .
                        '<td class="px-4 py-2">' . $item->nama_kelas . '</td>' .
                        '<td class="px-4 py-2 text-center align-middle">' .
                            '<div class="flex h-full space-x-2">' .
                                // Tombol Edit
                                '<button onclick="document.getElementById(\'editModal-' . $item->id_kelas . '\').classList.remove(\'hidden\')" class="text-blue-800 hover:text-blue-900 text-xl">' .
                                    '<i class="fas fa-pen-to-square"></i>' .
                                '</button>' .
                                // Tombol Hapus
                                '<button onclick="document.getElementById(\'deleteModal-' . $item->id_kelas . '\').classList.remove(\'hidden\')" class="text-red-500 hover:text-red-600 text-xl">' .
                                    '<i class="fas fa-trash"></i>' .
                                '</button>' .
                            '</div>' .
                        '</td>' .
                    '</tr>';
                }
            } else {
                $output .= '<tr><td colspan="3" class="text-center pt-4">Kategori tidak ditemukan</td></tr>';
            }
    
            return response($output);
        }
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
