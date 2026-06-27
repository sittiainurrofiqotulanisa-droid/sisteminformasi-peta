<?php

namespace App\Controllers;

use App\Models\M_Home;


class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();

        // Jumlah wilayah
        $jumlahwilayah = $db->table('wilayah')->countAll();

        // Total penduduk
        $row = $db->table('wilayah')
            ->selectSum('jumlah_penduduk')
            ->get()
            ->getRow();

        $totalPenduduk = $row ? $row->jumlah_penduduk : 0;

        // Data wilayah untuk tabel
        $wilayah = $db->table('wilayah')->get()->getResult();

        $data = [
            'judul' => 'Dashboard - Sistem Informasi Pemetaan',
            'jumlahwilayah' => $jumlahwilayah,
            'totalPenduduk' => $totalPenduduk,
            'wilayah' => $wilayah
        ];

        return view('templates/v_header', $data)
            . view('templates/v_sidebar')
            . view('templates/v_topbar')
            . view('home/index', $data)
            . view('templates/v_footer');
    }
}
