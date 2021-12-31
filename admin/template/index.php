<?php
@ob_start();
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: http://localhost/web-rizkon');
  exit;
} else {
  // var_dump($hasil);
  include '../../function/view/view.php';
  require '../../koneksi.php';
  $lihat = new View($config);

  // Template
  include './header.php';
  if (!empty($_GET['page'])) {
    include './' . $_GET['page'] . '/index.php';
  } else {
    include './main.php';
  }
  include './footer.php';
}
