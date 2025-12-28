<?php
require "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempatLahir = $_POST['tempatLahir'];
$tanggalLahir = $_POST['tanggalLahir'];
$jmlSaudara = $_POST['jmlSaudara'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$jk = $_POST['jk'];
$status = $_POST['statusKeluarga'];
$hobi = isset($_POST['hobi']) ? implode(",", $_POST['hobi']) : "";
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO mhs VALUES (
NULL,'$nim','$nama','$tempatLahir','$tanggalLahir','$jmlSaudara',
'$alamat','$kota','$jk','$status','$hobi','$email','$pass'
)";

mysqli_query($koneksi, $sql);
header("location:tampilDataMhs.php");
?>
