<?php

namespace App\Controllers;

// Impor semua model yang Anda perlukan
// Pastikan Anda SUDAH MEMBUAT file-file model ini di app/Models/
use App\Models\BiodataModel;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use App\Models\KeahlianModel;

class Cv extends BaseController
{
    public function index()
    {
        // Inisialisasi semua model
        $biodataModel = new BiodataModel();
        $pendidikanModel = new PendidikanModel();
        $pengalamanModel = new PengalamanModel();
        $keahlianModel = new KeahlianModel();

        // Siapkan data untuk dikirim ke View
        $data = [
            // Ambil data biodata (kita asumsikan ID 1 adalah biodata Anda)
            'biodata' => $biodataModel->find(1),
            
            // Ambil SEMUA data dari tabel relasi
            'pendidikan' => $pendidikanModel->where('biodata_id', 1)->findAll(),
            'pengalaman' => $pengalamanModel->where('biodata_id', 1)->findAll(),
            'keahlian' => $keahlianModel->where('biodata_id', 1)->findAll(),
        ];

        // Memuat view dan mengirimkan $data
        return view('v_cv', $data);
    }
}