<?php
require "koneksi.php";
$id = $_GET['kode'];
mysqli_query($koneksi, "DELETE FROM mhs WHERE id='$id'");
header("location:tampilDataMhs.php");
?>
