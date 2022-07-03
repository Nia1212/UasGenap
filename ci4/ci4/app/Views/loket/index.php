<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>


<div class="containe">

  <div class="row my-5">
    <div class="col">
      <!--  -->
      <div class="card w-75 ml-4 text-center">
        <div class="card-header bg-success text-light ">
          <h2>Loket 1</h2>
        </div>
        <div class="card-body fs-1">
          <h1><?$loket['kode']?></h1>
        </div>
      </div>
      <button class="btn btn-primary ml-4 mt-3 mb-4 w-75" type="submit">Selesai</button>
    </div>
    <div class="col">
    <div class="card w-75 ml-4 text-center">
        <div class="card-header bg-success text-light ">
          <h2>Loket 2</h2>
        </div>
        <div class="card-body fs-1">
          <h1>A1</h1>
        </div>
      </div>
      <button class="btn btn-primary ml-4 mt-3 mb-4 w-75" type="submit">Selesai</button>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary w-100 mb-4">Daftar Antrian Selanjutnya</button>
      <table class="table table-hover border border-3">
        <thead class="table-dark">
          <tr>
            <td>No antrian</td>
            <td>Panggil</td>
            <td>Keterangan</td>
          </tr>
        </thead>
        <?php foreach ($loket as $row => $values) : ?>
        <tbody>
          <tr>
            <th>A<?= $values->kode ?></th>
            <th><?= $values->keterangan ?></th>
            <th><a href="/loket/ambil_loket/<?= $values->id?>" class="btn btn-warning">Panggil</a></th>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
    </div>
  </div>

</div>




<?= $this->endSection(); ?>