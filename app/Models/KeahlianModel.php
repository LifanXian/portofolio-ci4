<?php

namespace App\Models;

use CodeIgniter\Model;

class KeahlianModel extends Model
{
    // Nama tabel di database Anda
    protected $table = 'keahlian';

    // Kolom yang diizinkan untuk diisi
    protected $allowedFields = ['biodata_id', 'nama_keahlian', 'kategori'];
}