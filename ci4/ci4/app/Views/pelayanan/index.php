<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>

<div class="container">
  <div class="main">
    <h1>Daftar Layanan</h1>
  </div>
  
  <div class="row pt-5">
    <div class="col">
      <a href="/" class="btn border bg-success bg-gradient w-100 text-light p-4"><h2>Menu Antrian</h2></a>
    </div>
  </div>
  <br>
  <div class="row text-center">
    <div class="col">
      <a href="/pelayanan/daftar_layanan" class="btn border bg-primary bg-gradient w-100 text-light p-4"><h2>Coustomer Service</h2></a>
    </div>
  
    <div class="col">
      <a href="/index" class="btn border bg-secondary bg-gradient w-100 text-light p-4"><h2>Permohonan Baru</h2></a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>