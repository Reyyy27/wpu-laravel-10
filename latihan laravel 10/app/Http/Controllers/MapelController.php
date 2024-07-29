<?php

namespace App\Http\Controllers;
use App\Models\mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');

        $mapel = Mapel::query()
        ->where('nama_mapel', 'LIKE', "%{$search}%")
        ->orWhere('keterangan', 'LIKE', "%{$search}%")
        ->get();

        
        return view('mapel', compact('mapel'));
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

        $mapel = mapel::find($id);

        return view('editmapel', compact('mapel') );
    }

    public function updatedata(Request $request, $id){

        $mapel = mapel::find($id);
        

        $mapel->update($request->all()); 
         

        return redirect()->route('kelas.mapel')->with('success','Data Berhasil Di Update');
    }

    public function delete($id){

        $mapel = mapel::find($id);
        $mapel->delete();

        return redirect()->route('kelas.mapel')->with('success','Data Berhasil Di Hapus');
    }
}
