<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\kelas;

class SiswaController extends Controller
{
    public function index() 
    {
        $data = siswa::all();
        
        $kelas = kelas::all();
        
        return view('siswa',compact('data','kelas'));
    
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

        $data = siswa::find($id);

        return view('editsiswa', compact('data') );
    }

    public function updatedata(Request $request, $id){

        $data = siswa::find($id);
        $data->update($request->all());  

        return redirect()->route('kelas.siswa')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){

        $data = siswa::find($id);
        $data->delete();

        return redirect()->route('kelas.siswa')->with('success','Data Berhasil Di Hapus');
    }
}
