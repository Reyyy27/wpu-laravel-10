<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\siswa;

class KelasController extends Controller
{
    public function index(Request $request) 
    {
        $search = $request->input('search');
        $siswa = siswa::all();
        $kelas = kelas::all();

        $kelas = kelas::query()
                ->where('kelas', 'LIKE', "%{$search}%")
                ->orWhere('jurusan', 'LIKE', "%{$search}%")
                ->get();


        return view('index',compact('kelas','siswa'));
    
    }

    public function create()
    {
        return view('index');
    }

    public function insertdata(Request $request)
    {
        kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success','Data Berhasil Di Tambahkan');
    }

    public function editdata($id){

        $kelas = kelas::find($id);

        return view('edit', compact('kelas') );
    }

    public function updatedata(Request $request, $id){

        $kelas = kelas::find($id);
        $kelas->update($request->all());  

        return redirect()->route('kelas.index')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){

        $kelas = kelas::find($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success','Data Berhasil Di Hapus');
    }

}
