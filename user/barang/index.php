<?php
if (isset($_GET['id'])) {
  $lihat = new View($config);
  $hasil = $lihat->detail_barang($_GET['id']);
  $barangs = $lihat->barang();
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Hello, world!</title>
</head>

<?php include '../template/navbar.php' ?>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <img src="http://localhost/pdocrud/assets/images/gambar1.jpg" class="img-fluid mx-auto d-block" alt="...">
      <!-- <img src="http://localhost/pdocrud/assets/images/<?= $hasil[0][6] ?>" class="img-fluid mx-auto d-block" alt="..."> -->
    </div>
    <div class="col-md-6">
      <h3><?= $hasil[0][2] ?></h3>
      <h5>Detail Barang</h5>
      <p><?= $hasil[0][4] ?></p>
      <h5>Harga <?= $hasil[0][3] ?></h5>
      <h5>Stok <?= $hasil[0][5] ?></h5>

      <a href="index.php?page=transaksi" class="text-white btn btn-primary">Beli</a>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md">
      <h3>Barang Lainnya</h3>
    </div>
  </div>
  <div class="row mt-3">
    <?php foreach ($barangs as $hsl) : ?>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src=" http://localhost/pdocrud/assets/images/gambar1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title"><?= $hsl[2] ?></h4>
            <p class="card-text">Harga <?= $hsl[3] ?></p>
            <p class="card-text"><?= $hsl[4] ?></p>
            <a href='index.php?page=barang&id=<?= $hsl[0] ?>' class="btn btn-primary btn-block">Beli Sekarang</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include '../template/footer.php' ?>