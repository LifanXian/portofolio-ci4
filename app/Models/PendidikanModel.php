<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    // Nama tabel di database Anda
    protected $table = 'pendidikan';

    // Kolom yang diizinkan untuk diisi
    // (Tidak diperlukan untuk ujian ini, tapi praktik yang baik)
    protected $allowedFields = ['biodata_id', 'institusi', 'jenjang', 'jurusan', 'tahun_mulai', 'tahun_selesai'];

    // Anda tidak perlu mengubah apapun lagi di sini.
    //
    // **TUGAS ANDA:**
    // Buat file serupa bernama:
    // 1. BiodataModel.php (protected $table = 'biodata';)
    // 2. PengalamanModel.php (protected $table = 'pengalaman';)
    // 3. KeahlianModel.php (protected $table = 'keahlian';)
}