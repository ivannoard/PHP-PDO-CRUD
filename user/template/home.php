<?php
$lihat = new View($config);
$hasil = $lihat->barang();

?>
<div class="jumbotron">
  <div class="container">
    <h1 class="display-4">Belanja Mudah di PDO CRUD Shop</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    <a href="#daftarbarang" class="btn btn-primary">Belanja Sekarang</a>
  </div>
</div>


<main>
  <div class="container menu-section">
    <div class="row ">
      <div class="col-md" id="daftarbarang">
        <h3>Daftar Barang</h3>
      </div>
    </div>
    <div class="row mt-3">
      <?php foreach ($hasil as $hsl) : ?>
        <div class="col-md-3 mb-4">
          <div class="card">
            <!-- Ganti tag gambar jika bug selesai -->
            <!-- <img src="http://localhost/pdocrud/assets/images/<?= $hasil[0][6] ?>" class="img-fluid mx-auto d-block" alt="..."> -->
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
  <!-- <div class="container about-section">
    <div class="row">
      <div class="col-md">
        <h3>Barang Terbaik</h3>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src=" http://localhost/pdocrud/assets/images/gambar1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src=" http://localhost/pdocrud/assets/images/gambar1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src=" http://localhost/pdocrud/assets/images/gambar1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src=" http://localhost/pdocrud/assets/images/gambar1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</main>