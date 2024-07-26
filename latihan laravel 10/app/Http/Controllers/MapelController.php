<?php

namespace App\Http\Controllers;
use App\Models\mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){
        $data = mapel::all();

        
        return view('mapel', compact('data'));
    }

    
    public function create()
    {
        return view('mapel');
    }

    public function insertdata(Request $request)
    {
        mapel::create($request->all());

        return redirect()->route('kelas.mapel')->with('success','Data Berhasil Di Tambahkan');
    }

    public function editdata($id){

        $data = mapel::find($id);

        return view('editmapel', compact('data') );
    }

    public function updatedata(Request $request, $id){

        $data = mapel::find($id);
        

        $data->update($request->all()); 
         

        return redirect()->route('kelas.mapel')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){

        $data = mapel::find($id);
        $data->delete();

        return redirect()->route('kelas.mapel')->with('success','Data Berhasil Di Hapus');
    }
}
