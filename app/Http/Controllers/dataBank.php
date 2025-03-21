<?php

namespace App\Http\Controllers;

use App\Models\dataBank as ModelsDataBank;
use Illuminate\Http\Request;

class dataBank extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel 'kelas'
        $dataBank = ModelsDataBank::all(); 

        // Kirim data ke view
        return view('dataBank', compact('dataBank'));
    }
}
