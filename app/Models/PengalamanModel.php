<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanModel extends Model
{
    // Nama tabel di database Anda
    protected $table = 'pengalaman';

    // Kolom yang diizinkan untuk diisi
    protected $allowedFields = ['biodata_id', 'kategori', 'posisi', 'lokasi', 'deskripsi'];
}