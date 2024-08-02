<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;

class KelasController extends Controller
{
    public function index(Request $request) 
    {
        $search = $request->input('search');
        $siswa = Siswa::all();
        $kelas = Kelas::query()
            ->where('kelas', 'LIKE', "%{$search}%")
            ->orWhere('jurusan', 'LIKE', "%{$search}%")
            ->get();

        return view('index', compact('kelas', 'siswa'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
        ]);

        $kelas = Kelas::create($validatedData);
        $siswaCount = Siswa::where('kelas_id', $kelas->id)->count();

        return response()->json([
            'id' => $kelas->id,
            'kelas' => $kelas->kelas,
            'jurusan' => $kelas->jurusan,
            'siswa_count' => $siswaCount
        ]);
    }

    public function create()
    {
        return view('index');
    }

    public function insertdata(Request $request)
    {
        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function editdata($id)
    {
        $kelas = Kelas::find($id);

        return view('edit', compact('kelas'));
    }

    public function updatedata(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->all());

        return redirect()->route('kelas.index')->with('success', 'Data Berhasil Di update');
    }

    public function delete($id)
{
    $kelas = kelas::find($id);

    if ($kelas) {
        $kelas->delete();
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false], 404);
}

    
}
