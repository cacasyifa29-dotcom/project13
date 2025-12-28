<?php
require "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

mysqli_query($koneksi, "UPDATE mhs SET nama='$nama', email='$email' WHERE id='$id'");
header("location:tampilDataMhs.php");
?>
