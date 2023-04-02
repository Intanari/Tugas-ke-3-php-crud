<?php include 'crud.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fransiska Paulina Ari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-md">
    <a class="navbar-brand" href="#">PEMROGRAMAN PHP</a>
  </div>
</nav>
    
    
    
    <div class="container">
  <h2>Daftar Transaksi Keuangan</h2>
  
  
  <!-- Button Tambah Data -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
  Tambah Data
</button>

  <!-- Modal Tambah Data-->
  <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
            <form method="post">
                  <div class="modal-body">
                      <input type="date" name="Tanggal" class="form-control" placeholder="Tanggal"><br>
                      <input type="text" name="Keterangan" class="form-control" placeholder="Keterangan"><br>
                      <input type="number" name="Debit" class="form-control" placeholder="Debit"><br>
                      <input type="number" name="Kredit" class="form-control" placeholder="Kredit"><br>
                      
                      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <input type="submit" class="btn btn-primary" name="tambahdata" value="Tambah Data">
      </div>
      
      
          </form>

    </div>
  </div>
</div>


  <!-- Modal Ubah Data-->
  <?php foreach ($AmbilData as $data):?>
  <div class="modal fade" id="<?= $data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
            <form method="post">
                  <div class="modal-body">
                      <input type="text" name="id" value="<?= $data['id']?>" class="form-control" placheholder="id" hidden>
                      <input type="date" name="Tanggal"  value="<?= $data['tanggal']?>"  class="form-control" placeholder="Tanggal"><br>
                      <input type="text" name="Keterangan" value="<?= $data['keterangan']?>" class="form-control" placeholder="Keterangan"><br>
                      <input type="number" name="Debit" value="<?= $data['debit']?>" class="form-control" placeholder="Debit"><br>
                      <input type="number" name="Kredit" value="<?=$data['kredit']?>" class="form-control"  placeholder="Kredit"><br>
                      
                      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <input type="submit" class="btn btn-primary" name="ubahdata" value="Ubah Data">
      </div>
      
      
          </form>

    </div>
  </div>
</div>
  <?php endforeach;?>
    <table class="table">
    <thead>
    
    <tr>
     
      <th scope="col">Tanggal</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Debit</th>
      <th scope="col">Kredit</th>
      <th scope="col">Aksi</th>
    </tr>
    </thead>
    
    <tbody>
        <?php foreach ($AmbilData as $data):?>
    <tr>
      <td><?= $data['tanggal']?></td>
      <td><?= $data['keterangan']?></td>
      <td><?= $data['debit']?></td>
      <td><?= $data['kredit']?></td>
      <td>
          <form method="post">
          <!-- Button Ubah Data -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= $data['id']?>">
          Ubah Data
          </button>
          <input type="hidden" name="id" value="<?= $data['id']?>">
          <input type="submit" class="btn btn-primary" name="hapus" value="Hapus Data">
          
          </form>
       </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>


</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>