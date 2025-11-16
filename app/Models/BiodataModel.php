<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    // Nama tabel di database Anda
    protected $table = 'biodata';

    // Kolom yang diizinkan untuk diisi
    protected $allowedFields = ['nama_lengkap', 'foto_profil', 'jabatan', 'deskripsi_singkat', 'email', 'linkedin', 'github', 'file_cv'];
}