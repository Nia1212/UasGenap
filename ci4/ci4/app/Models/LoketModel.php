<?php

namespace App\Models;

use CodeIgniter\Model;

class LoketModel extends Model
{
  protected $table = 'loket';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nama', 'keterangan', 'pelayanan_id'];

  // Menampilkan data
  public function index($id = false)
  {
    $builder = $this->table('loket');
    $builder->join('antrian', 'antrian.loket_id = loket.id');
    $builder->join('pelayanan', 'pelayanan.id = loket.pelayanan_id');
    $builder->select('*');
    $query = $builder->get();
    return $query->getResult();
    if ($id === false) {
      return $this->paginate(10, 'loket');
    }

    return $this->where([
      'id' => $id
    ])->first();
  }

  // // Pencarian warga
  // public function pencarian($kunci)
  // {
  //   return $this->table('warga')->like('nama',$kunci);
  // }
  

}