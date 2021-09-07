<?php
require 'functions.php';
$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jenis Buku</title>
</head>

<body>
  <h3>Jenis Buku</h3>
  <table border='1' cellpadding='10' cellspacing='0'>
    <tr>
      <th>No</th>
      <th>id_buku</th>
      <th>judul</th>
      <th>aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($buku as $bk) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $bk['id_buku']; ?></td>
        <th><?= $bk['judul']; ?></th>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>

        </td>
      </tr>
    <?php endforeach ?>

  </table>
</body>

</html>