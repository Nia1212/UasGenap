<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
  protected $table = 'pelayanan';
  protected $primaryKey = 'id';
  protected $allowedFields = ['id','nama', 'keterangan', 'kode'];

  // Menampilkan data

  public function getAll($id = false)
  {
    if ($id === false) {
      return $this->paginate(10, 'pelayanan');
    }

    return $this->where([
      'id' => $id
    ])->first();
  }


  // Kode Otomatis
  public function noPendaftaran()
  {
    $kode = $this->db->table('pelayanan')
      ->select('RIGHT(kode,2) as kode', false)
      ->orderBy('kode', 'DESC')
      ->limit(1)->get()->getRowArray();

    if ($kode['kode'] == null) {
      $no = 1; #Jika kode belum terisi maka akan di mualai dengan aka 01
    } else {
      $no = intval($kode['kode']) + 1; # Jika kode sudah terisi maka 1 + 1
    }
    $batas = str_pad($no, 2, "0", STR_PAD_LEFT);
    $no_pendaftaran = $batas;
    return $no_pendaftaran;
  }


  public function id()
  {
    $kode = $this->db->table('pelayanan')
      ->select('RIGHT(id,5) as id', false)
      ->orderBy('id', 'DESC')
      ->limit(1)->get()->getRowArray();

    if ($kode['id'] == null) {
      $no = 1;
    } else {
      $no = intval($kode['id']) + 1;
    }

    // $no_antri = $no;
    return $no;
  }
}
