<?php

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

$db = "pdocrud";
$user = "root";
$pass = "root";
$host = "localhost";

try {
  $config = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
  //echo 'sukses';
} catch (PDOException $e) {
  echo 'KONEKSI GAGAL' . $e->getMessage();
}

$view = "function/view/view.php";
