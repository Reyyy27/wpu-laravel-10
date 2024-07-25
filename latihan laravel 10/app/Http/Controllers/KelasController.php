<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\siswa;

class KelasController extends Controller
{
    public function index() 
    {
        $data = kelas::all();
       
        $siswa = siswa::all();

        return view('index',compact('data','siswa'));
    
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

        $data = kelas::find($id);

        return view('edit', compact('data') );
    }

    public function updatedata(Request $request, $id){

        $data = kelas::find($id);
        $data->update($request->all());  

        return redirect()->route('kelas.index')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){

        $data = kelas::find($id);
        $data->delete();

        return redirect()->route('kelas.index')->with('success','Data Berhasil Di Hapus');
    }

}
