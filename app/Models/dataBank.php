<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dataBank extends Model
{
    use HasFactory;

    protected $table = 'daftar_bank'; // Nama tabel

    protected $fillable = ['KodeBank', 'NamaBank']; // Kolom yang boleh diisi

    public $timestamps = false; // Jika tidak ada kolom created_at & updated_at
}
