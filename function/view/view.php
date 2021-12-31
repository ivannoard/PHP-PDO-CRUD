<?php

class View
{

  protected $db;
  function __construct($db)
  {
    $this->db = $db;
  }

  function barang()
  {
    $sql = "SELECT * FROM barang";
    $row = $this->db->prepare($sql);
    $row->execute();
    $hasil = $row->fetchAll();
    return $hasil;
  }
  function detail_barang($id)
  {
    $sql = "SELECT * FROM barang WHERE id = $id";
    $row = $this->db->prepare($sql);
    $row->execute();
    $hasil = $row->fetchAll();
    return $hasil;
  }

  function admin_tambah_barang($data)
  {
    $kode_barang = $data['kodebarang'];
    $nama_barang = $data['namabarang'];
    $harga = $data['hargabarang'];
    $stok = $data['stokbarang'];
    $deskripsi = $data['deskripsi'];
    $gambar = $_FILES['fotobarang']['name'];


    $filename = $_FILES['fotobarang']['name'];
    $target_file = './uploads/' . basename($filename);
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

    try {

      $sql = 'INSERT INTO barang(kode_barang,nama_barang,harga,deskripsi,stok,gambar) VALUES (:kode_barang,:nama_barang,:harga,:deskripsi,:stok,:gambar)';

      $sttmt = $this->db->prepare($sql);
      $result = $sttmt->execute(array(
        ":kode_barang" => $kode_barang,
        ":nama_barang" => $nama_barang,
        ":harga" => $harga,
        ":deskripsi" => $deskripsi,
        ":stok" => $stok,
        ":gambar" => $gambar,
      ));
    } catch (PDOException $e) {
      echo $e->getMessage();
      echo $e->getTraceAsString();
    }

    if ($result) {
      return header('Location: ./index.php');
    } else {
      echo "alert('Gagal');";
    }
  }

  function admin_update_barang($data)
  {
    $id = $data['id'];
    $kode_barang = $data['kodebarang'];
    $nama_barang = $data['namabarang'];
    $harga = $data['hargabarang'];
    $stok = $data['stokbarang'];
    $deskripsi = $data['deskripsi'];
    $gambar = $_FILES['fotobarang']['name'];

    try {

      $sql = "UPDATE barang SET kode_barang=:kode_barang,nama_barang=:nama_barang,harga=:harga,deskripsi=:deskripsi,stok=:stok WHERE id = :id";


      $sttmt = $this->db->prepare($sql);
      $result = $sttmt->execute(array(
        ":id" => $id,
        ":kode_barang" => $kode_barang,
        ":nama_barang" => $nama_barang,
        ":harga" => $harga,
        ":deskripsi" => $deskripsi,
        ":stok" => $stok,
      ));
    } catch (PDOException $e) {
      echo $e->getMessage();
      echo $e->getTraceAsString();
    }

    if ($result) {
      return header('Location: ./index.php');
    } else {
      echo "alert('Gagal');";
    }
  }

  function admin_single_barang($id)
  {
    $sql = "SELECT * FROM barang WHERE id = :id";
    $row = $this->db->prepare($sql);
    $row->execute(array(":id" => $id));
    $hasil = $row->fetchAll();
    return $hasil;
  }

  function admin_delete_barang($id)
  {
    $sql = "DELETE FROM barang WHERE id = :id";
    $row = $this->db->prepare($sql);
    $result = $row->execute(array(":id" => $id));
    if ($result) {
      return header('Location: ./index.php');
    }
  }
}
