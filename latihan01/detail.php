<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$bk = query("SELECT * FROM buku WHERE id = $id");

?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Buku</title>
</head>

<body>
  <h3>Detail Buku</h3>
  <ul>
    <li>Penerbit : <?= $bk['penerbit']; ?></li>
    <li>Tahun Terbit : <?= $bk['tahunterbit']; ?></li>
    <li>Pengarang : <?= $bk['pengarang']; ?></li>
    <li><a href="">ubah</a> <a href="">hapus</a></li>
    <li><a href="latihan2.php">kembali ke daftar buku</a></li>
  </ul>
</body>

</html>