<?php include './navbar.php' ?>

<div class="row">
  <div class="container">
    <div class="col">
      <img src="http://localhost/pdocrud/assets/images/gambar1.jpg" class="img-fluid mx-auto d-block" alt="...">
    </div>
    <div class="col">
      <form>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Email Anda">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Nama Anda">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Anda">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Pesan</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary btn-lg btn-block" onclick="return alert('Pesanan Anda Sedang Diproses :D')">Beli</button>
      </form>
    </div>

  </div>
</div>

<?php include './footer.php' ?>