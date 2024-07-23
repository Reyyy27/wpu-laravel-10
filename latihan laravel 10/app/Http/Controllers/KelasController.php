<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
class KelasController extends Controller
{
    
    public function index() 
    {
        return view('index');
    
    }

    public function create()
    {

    }
}
