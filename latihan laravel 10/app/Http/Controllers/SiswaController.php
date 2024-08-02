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

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'nis' => 'required',
            'nama' => 'required|string',
            'kelas_id' => 'required|exists:kelas,id',   
        ]);

        $siswa = Siswa::create($validatedData);
        
        return response()->json([
            'id' => $siswa->id,
            'nis' => $siswa->nis,
            'nama' => $siswa->nama,
            'kelas' => $siswa->kelas->kelas,
            'jurusan' => $siswa->kelas->jurusan,
        ]);

    }

    public function create()
    {
        return view('siswa');
    }

    public function insertdata(Request $request)
    {
        siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success','Data Berhasil Di Tambahkan');
    }

    public function editdata($id){

        $siswa = siswa::find($id);

        $kelas = Kelas::all();
        return view('editsiswa', compact('siswa','kelas') );
    }

    public function updatedata(Request $request, $id){

        $siswa = siswa::find($id);
        $siswa->update($request->all()); 
         
        return redirect()->route('siswa.index')->with('success','Data Berhasil Di Update');
    }

    public function delete($id)
{
    $siswa = siswa::find($id);

    if ($siswa) {
        $siswa->delete();
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 404);
}
}
