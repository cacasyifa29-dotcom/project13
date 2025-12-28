<?php
require "koneksi.php";
$id = $_GET['kode'];
$data = mysqli_query($koneksi, "SELECT * FROM mhs WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<form action="simpanKoreksiDataMhs.php" method="POST">
<input type="hidden" name="id" value="<?= $id ?>">

Nama: <input type="text" name="nama" value="<?= $d['nama'] ?>"><br><br>
Email: <input type="email" name="email" value="<?= $d['email'] ?>"><br><br>

<input type="submit" value="Update">
</form>
