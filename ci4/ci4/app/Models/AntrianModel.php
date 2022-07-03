<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
  protected $table = 'antrian';
  protected $primaryKey = 'id';
  protected $allowedFields = ['tanggal', 'no_antrian', 'status', 'waktu_panggil', 'waktu_selesai', 'pelayanan_id', 'loket_id'];


  // Inner Join
  public function getAll($id = false)
  {
    $builder = $this->table('antrian');
    $builder->join('loket', 'loket.id = antrian.loket_id');
    $builder->join('pelayanan', 'pelayanan.id = antrian.pelayanan_id');
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
}
