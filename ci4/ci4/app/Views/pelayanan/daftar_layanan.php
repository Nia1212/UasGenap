<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>

<?php
$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('Y/m/d | G:i');
?>

<div class="container">
  <div class="row justify-content-between ">
    <div class="col-8 shadow-lg p-3 mb-5 bg-body rounde">
      <h2 class="text-center">Pendaftaran</h2>
      <hr class="bg-dark">
      <form action="<?= base_url('pelayanan/simpan') ?>" method="post">
        <div class="row">
          <div class="col">
            <label for="" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control mb-3" require id="floatingInput" placeholder="Nama...">
          </div>
          <div class="col">
            <label for="" class="form-label">Nomor</label>
            <input type="text" name="kode" class="form-control mb-3 w-50" id="floatingInput" placeholder="" value="<?= $no_pendaftaran ?>" readonly>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="" class="form-label">Tanggal</label>
            <input type="text" name="tanggal" class="form-control mb-3" id="floatingInput" value="<?= $timestamp; ?>" readonly>
          </div>
          <div class="col">
          <label for="" class="form-label">ID</label>
            <input type="text" name="pelayanan_id" class="form-control mb-3 w-50" id="floatingInput" placeholder="" value="<?= $id ?>" readonly>
          </div>
        </div>
        <div class="row">
        <div class="col">
            <div class="card mb-3 ">
              <div class="card-header">
                <h3>Nomor Antrian</h3>
              </div>
              <div class="card-body">
                <h1 class="text-center">A<?= $no_pendaftaran ?></h1>
              </div>
            </div>
          </div>
          <div class="col">
        <button type="submit" class="btn btn-primary">Ambil Antrian</button>
          </div>
        </div>


        <!-- <input type="text" name="loket_id" class="form-control mb-3" id="floatingInput" placeholder="">
        <input type="text" name="pelayanan_id" class="form-control mb-3" id="floatingInput" placeholder=""> -->
        <!-- readonly -->

      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>