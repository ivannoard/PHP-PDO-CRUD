<?php
$hasil = $lihat->barang();
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $hasil = $lihat->admin_delete_barang($id);
}
?>
<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1 class="mt-4">Dashboard</h1>
      <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <div class="row">
        <div class="col-md">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $index = 1 ?>
              <?php for ($i = 0; $i < count($hasil); $i++) : ?>
                <tr>
                  <th scope="row"><?= $index ?></th>
                  <td><?= $hasil[$i][1] ?></td>
                  <td><?= $hasil[$i][2] ?></td>
                  <td><?= $hasil[$i][3] ?></td>
                  <td><?= $hasil[$i][5] ?></td>
                  <td>
                    <a class="btn btn-warning" href="index.php?page=barang/update&id=<?= $hasil[$i][0] ?>">Update</a> |
                    <a class="btn btn-danger" href="index.php?delete=<?= $hasil[$i][0] ?>" onclick="return confirm('yakin?');">Hapus</a>
                  </td>
                </tr>
                <?php $index++ ?>
              <?php endfor ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </main>
</div>