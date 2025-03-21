<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dataPengawas extends Model
{
    use HasFactory;

    protected $table = 'tendik'; // Nama tabel

    protected $fillable = ['NIP', 'Nama', 'Fakultas',  'ASN', 'Golongan',  'Jenis']; // Kolom yang boleh diisi

    public $timestamps = false; // Jika tidak ada kolom created_at & updated_at
}
