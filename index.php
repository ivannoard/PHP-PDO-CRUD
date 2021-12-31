<?php

require 'koneksi.php';
include $view;
// $lihat = new View($config);
// $hasil = $lihat->barang();
// var_dump($hasil);

include './user/template/navbar.php';
if (!empty($_GET['page'])) {
  include './user/' . $_GET['page'] . '/index.php';
} else {
  include './user/template/home.php';
}
include './user/template/footer.php';
