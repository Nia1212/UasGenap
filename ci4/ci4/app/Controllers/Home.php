<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->AntrianModel = new AntrianModel();
        $this->PelayananModel = new PelayananModel();
        $this->LoketModel = new LoketModel;
    }

    public function index()
    {
        $data['antrian'] = $this->AntrianModel->getAll();
        // dd($data);
        return view('index', $data);
    }



    // public function save()
    // {
    //     $data = [
    //         'pelayan_id' => $this->request->getPost('pelayanan_id'),
    //         'nama' => $this->request->getPost('nama')
    //     ];

    //     dd($data);

    //     return view('/index', $data);
    // }
}
