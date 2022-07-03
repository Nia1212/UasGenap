<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;

class Pelayanan extends BaseController
{
    public function __construct()
    {
        $this->AntrianModel = new AntrianModel();
        $this->PelayananModel = new PelayananModel();
        $this->LoketModel = new LoketModel;
    }

    public function index()
    {
        $data['pelayanan'] = $this->AntrianModel->getAll();
        return view('/pelayanan/index', $data);
    }

    public function daftar()
    {
        $no_antri = $this->PelayananModel->id();
        $no_pendaftaran = $this->PelayananModel->noPendaftaran();
        $data = [
            'title' => 'Pendaftaran 1',
            'no_pendaftaran' => $no_pendaftaran,
            'id' => $no_antri,
            'validation' => \config\Services::validation(),
        ];
        // dd($data);
        return view('/pelayanan/daftar_layanan', $data);
    }


    public function simpan()
    {
        $nama = $this->request->getVar('nama');
        $kode = $this->request->getVar('kode');
        $tanggal = $this->request->getVar('tanggal');
        $pelayanan_id = $this->request->getVar('pelayanan_id');
        $loket_id = $this->request->getVar('pelayanan_id');
        $id = $this->request->getVar('id');
        $data = [
            'nama' => $nama,
            'kode' => $kode,
            'tanggal' => $tanggal,
            'pelayanan_id' => $pelayanan_id,
            'loket_id' => $loket_id
            # menyimpan ke dalam 3 table database
        ];

        $this->PelayananModel->save($data);
        $this->LoketModel->save($data);
        $this->AntrianModel->save($data);
        return redirect()->to('/'); # Kembali ke halaman awal
    }
}
