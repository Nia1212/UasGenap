<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>


<div class="container">
  <div class="row justify-content-between">
    <div class="col-8">
      <h2>Loket Panggil</h2>
      <div class="card">
        <div class="card-header">
          <h2>Loket 1</h2>
        </div>
        <div class="card-body">
          <h2>A<?=$pelayanan['kode']; ?></h2>
        </div>
      </div>

      <!-- <form action="/loket/save" method="post">
        <div class="mb-3">
          <label for="id" class="form-label">id</label>
          <input class="form-control" type="text" placeholder="Masukan Nama" aria-label=" input example" name="pelayanan_id" readonly value="<?= $pelayanan['id']; ?>">
        </div>
        <div class="mb-3">
          <label for="bulan" class="form-label">Nama</label>
          <input class="form-control" type="text" placeholder="Masukan Nama" aria-label=" input example" name="nama" readonly value="<?= $pelayanan['nama']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Ambil Loket</button>
      </form> -->
    </div>
  </div>
</div>

<?= $this->endSection(); ?>