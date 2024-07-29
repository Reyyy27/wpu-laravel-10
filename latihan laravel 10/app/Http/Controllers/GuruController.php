<?php

namespace App\Http\Controllers;
use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');

        // Lakukan pencarian berdasarkan nama atau field lain
        $guru = guru::query()
                    ->when($search, function($query, $search) {
                        return $query->where('nama_guru', 'like', "%{$search}%")
                                     ->orWhere('nomor_induk', 'like', "%{$search}%")
                                     ->orWhere('alamat', 'like', "%{$search}%")
                                     ->orWhere('no_telpon', 'like', "%{$search}%")
                                     ;
                    })
                    ->get();

        return view('guru', compact('guru'));
    }

    
    public function create()
    {
        return view('guru');
    }

    public function insertdata(Request $request)
    {
        guru::create($request->all());

        return redirect()->route('kelas.guru')->with('success','Data Berhasil Di Tambahkan');
    }

    public function editdata($id){

        $guru = guru::find($id);

        return view('editguru', compact('guru') );
    }

    public function updatedata(Request $request, $id){

        $guru = guru::find($id);
        

        $guru->update($request->all()); 
         

        return redirect()->route('kelas.guru')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){

        $guru = guru::find($id);
        $guru->delete();

        return redirect()->route('kelas.guru')->with('success','Data Berhasil Di Hapus');
    }
}
