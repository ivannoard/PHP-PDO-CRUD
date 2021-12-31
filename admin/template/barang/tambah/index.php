<?php
include '../../../../function/view/view.php';
// require '../../../../koneksi.php';
$lihat = new View($config);
// $hasil = $lihat->barang();
if (isset($_POST['tambah'])) {

  $filename = $_FILES['fotobarang']['name'];
  $target_file = '../../../../uploads/' . basename($filename);
  $file_extension = pathinfo(
    $target_file,
    PATHINFO_EXTENSION
  );

  $file_extension = strtolower($file_extension);
  $valid_extension = array("png", "jpeg", "jpg");
  if (in_array($file_extension, $valid_extension)) {
    move_uploaded_file(
      $_FILES['fotobarang']['tmp_name'],
      $target_file
    );
  }
  $lihat->admin_tambah_barang($_POST);
}
// 
?>
<link rel="stylesheet" href="">
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Dashboard</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">Tambah Barang</li>
      </ol>

      <div class="row">
        <div class="col-md-8">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="kodebarang">Kode Barang</label>
              <input type="text" class="form-control" name="kodebarang" id="kodebarang">
            </div>
            <div class="form-group mt-2">
              <label for="namabarang">Nama Barang</label>
              <input type="text" class="form-control" name="namabarang" id="namabarang">
            </div>
            <div class="form-group mt-2">
              <label for="hargabarang">Harga Barang</label>
              <input type="number" class="form-control" name="hargabarang" id="hargabarang">
            </div>
            <div class="form-group mt-2">
              <label for="stokbarang">Stok Barang</label>
              <input type="number" class="form-control" name="stokbarang" id="stokbarang">
            </div>
            <div class="form-group mt-2">
              <label for="deskripsi">Deskripsi Barang</label>
              <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
            </div>
            <div class="form-group mt-2">
              <label for="fotobarang">Foto Barang</label>
              <input type="file" class="form-control" name="fotobarang" id="fotobarang">
            </div>
            <button type="submit" class="btn btn-primary mt-4" name="tambah">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </main>
</div>