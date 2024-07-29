<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\kelas;

class SiswaController extends Controller
{
    public function index(Request $request) 
    {
        $search = $request->input('search');
        $kelas = Kelas::all();
        $siswa = Siswa::query()
                ->where('nis', 'LIKE', "%{$search}%")
                ->orWhere('nama', 'LIKE', "%{$search}%")
                ->orWhereHas('kelas', function ($query) use ($search) {
                    $query->where('kelas', 'LIKE', "%{$search}%");
                          
                })
                ->get();
         
        return view('siswa',compact('siswa','kelas'));
    
    }

    public function create()
    {
        return view('siswa');
    }

    public function insertdata(Request $request)
    {
        siswa::create($request->all());

        return redirect()->route('kelas.siswa')->with('success','Data Berhasil Di Tambahkan');
    }

    public function editdata($id){

        $siswa = siswa::find($id);

        return view('editsiswa', compact('siswa') );
    }

    public function updatedata(Request $request, $id){

        $siswa = siswa::find($id);
        

        $siswa->update($request->all()); 
         

        return redirect()->route('kelas.siswa')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){

        $siswa = siswa::find($id);
        $siswa->delete();

        return redirect()->route('kelas.siswa')->with('success','Data Berhasil Di Hapus');
    }
}
