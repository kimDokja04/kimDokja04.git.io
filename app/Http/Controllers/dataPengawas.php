<?php

namespace App\Http\Controllers;

use App\Models\dataPengawas as ModelsDataPengawas;
use Illuminate\Http\Request;

class dataPengawas extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel 'kelas'
        $dataBank = ModelsDataPengawas::all(); 

        // Kirim data ke view
        return view('dashboard', compact('dataBank'));
    }
}
