<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;

class Antrian extends BaseController
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

    return view('index' , $data);
  }

}