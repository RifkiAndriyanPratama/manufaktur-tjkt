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
        
        $barang = $query->orderBy('id_barang', 'asc')->get();
        $kategori = Kategori::all();    
    
        return view('admin.management', compact('barang', 'kategori'));
    }
    

    public function search(Request $request)
{
    if ($request->ajax()) {
        $output = '';
        
        // Mulai query barang
        $query = Barang::with('kategori');

        // Filter berdasarkan kategori jika dipilih
        if ($request->filled('id_kategori') && $request->id_kategori != 'all') {
            $query->where('id_kategori', $request->id_kategori);
        }

        // Pencarian nama barang jika input search tidak kosong
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_barang', 'ilike', '%' . $request->search . '%')
                  ->orWhereHas('kategori', function ($qKategori) use ($request) {
                      $qKategori->where('nama_kategori', 'ilike', '%' . $request->search . '%');
                  });
            });
        }

        // Eksekusi query
        $barang = $query->get();

        // Jika ada barang, buat output
        if ($barang->isNotEmpty()) {
            foreach ($barang as $index => $item) {
                $output .= '<tr class="' . ($index % 2 == 0 ? 'bg-gray-200' : 'bg-gray-100') . ' hover:bg-blue-200">' .
                    '<td class="px-4 py-2">' . ($index + 1) . '</td>' .
                    '<td class="px-4 py-2">' . ($item->nama_barang) . '</td>' .
                    '<td class="px-4 py-2">' . ($item->kategori ? $item->kategori->nama_kategori : 'Kategori tidak ditemukan') . '</td>' .
                    '<td class="px-4 py-2 text-center align-middle">' .
                        '<div class="flex h-full space-x-2">' .
                            // Tombol Edit
                            '<button onclick="document.getElementById(\'editModal-' . $item->id_barang . '\').classList.remove(\'hidden\')" class="text-blue-800 hover:text-blue-900 text-xl">' .
                                '<i class="fas fa-pen-to-square"></i>' .
                            '</button>' .
                            // Tombol Hapus
                            '<button onclick="document.getElementById(\'deleteModal-' . $item->id_barang . '\').classList.remove(\'hidden\')" class="text-red-500 hover:text-red-600 text-xl">' .
                                '<i class="fas fa-trash"></i>' .
                            '</button>' .
                        '</div>' .
                    '</td>' .
                '</tr>';
            }
        } else {
            $output .= '<tr><td colspan="4" class="text-center pt-4">Barang atau kategori tidak ditemukan</td></tr>';
        }

        return response($output);
    }
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
