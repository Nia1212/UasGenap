<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>
<div class="container">
<table class="table text-center border table-hover">
        <thead class="bg-secondary text-light">
          <tr>
            <th>Nama</th>
            <th>Nomor Antrian</th>
            <th>AKsi</th>
          </tr>
        </thead>
    <?php 
    foreach($pelayanan as $d) :
    ?>
        <tbody >
          <tr>
            <td><?= $d['nama'];?></td>
            <td><?= $d['kode'];?></td>
            <td><a href="/loket/ambil_loket/<?= $d['id'];?>" class="btn btn-primary">Ambil Antrian</a></td>
          </tr>
        </tbody>
    <?php endforeach; ?>
      </table>
</div>

<?= $this->endSection(); ?>