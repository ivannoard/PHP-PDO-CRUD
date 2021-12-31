<?php
if (!empty($_GET['id'])) {
  $id = $_GET['id'];
  $hasil = $lihat->admin_single_barang($id);
}
if (isset($_POST['update'])) {
  $hasil = $_POST['namabarang'];
  $hasil = $lihat->admin_update_barang($_POST);
}

?>

<div id="layoutSidenav_content">
  <main>
    <?= $hasil[0][2] ?>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Dashboard</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Update Barang</li>
      </ol>

      <div class="row">
        <div class="col-md-8">
          <form method="post">
            <input type="hidden" class="form-control" name="id" id="id" value="<?= $hasil[0][0] ?>">
            <div class="form-group">
              <label for="kodebarang">Kode Barang</label>
              <input type="text" class="form-control" name="kodebarang" id="kodebarang" value="<?= $hasil[0][1] ?>">
            </div>
            <div class="form-group mt-2">
              <label for="namabarang">Nama Barang</label>
              <input type="text" class="form-control" name="namabarang" id="namabarang" value="<?= $hasil[0][2] ?>">
            </div>
            <div class="form-group mt-2">
              <label for="hargabarang">Harga Barang</label>
              <input type="number" class="form-control" name="hargabarang" id="hargabarang" value="<?= $hasil[0][3] ?>">
            </div>
            <div class="form-group mt-2">
              <label for="stokbarang">Stok Barang</label>
              <input type="number" class="form-control" name="stokbarang" id="stokbarang" value="<?= $hasil[0][5] ?>">
            </div>
            <div class="form-group mt-2">
              <label for="deskripsi">Deskripsi Barang</label>
              <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $hasil[0][4] ?></textarea>
            </div>
            <!-- <div class="form-group mt-2">
              <label for="fotobarang">Foto Barang</label>
              <input type="file" class="form-control" name="fotobarang" id="fotobarang" value="<?= $hasil[0][5] ?>">
            </div> -->
            <button type=" submit" class="btn btn-primary mt-4" name="update">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </main>
</div>