<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index(Request $request){
        $query = Kategori::query();
        
        if ($request->has('search') && !empty($request->search)) {
            $query->where('nama_kategori', 'ilike', '%' . $request->search . '%');
        }
    
        $kategori = $query->orderBy('id_kategori', 'asc')->get();
    
        return view("admin.kategori", compact("kategori"));
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $output = '';
    
            $query = Kategori::query(); 
    
            if ($request->has('search') && !empty($request->search)) {
                $query->where('nama_kategori', 'ilike', '%' . $request->search . '%');
            }
    
            $kategori = $query->get();
    
            if ($kategori->isNotEmpty()) {
                foreach ($kategori as $index => $item) {
                    $output .= '<tr class="' . ($index % 2 == 0 ? 'bg-gray-200' : 'bg-gray-100') . ' hover:bg-blue-200">' .
                        '<td class="px-4 py-2">' . ($index + 1) . '</td>' .
                        '<td class="px-4 py-2">' . $item->nama_kategori . '</td>' .
                        '<td class="px-4 py-2 text-center align-middle">' .
                            '<div class="flex h-full space-x-2">' .
                                // Tombol Edit
                                '<button onclick="document.getElementById(\'editModal-' . $item->id_kategori . '\').classList.remove(\'hidden\')" class="text-blue-800 hover:text-blue-900 text-xl">' .
                                    '<i class="fas fa-pen-to-square"></i>' .
                                '</button>' .
                                // Tombol Hapus
                                '<button onclick="document.getElementById(\'deleteModal-' . $item->id_kategori . '\').classList.remove(\'hidden\')" class="text-red-500 hover:text-red-600 text-xl">' .
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
