<?php
namespace App\Controllers;

class Maps extends BaseController
{
    public function index()
    {

        $data = [
            'judul' => ' Dashboard - Maps '
        ];
        echo view('templates/v_header', $data);
        echo view('templates/v_sidebar');
        echo view('templates/v_topbar');
        echo view('maps/index', $data);
        echo view('templates/v_footer');

        return view('maps/index', $data);
    }
}