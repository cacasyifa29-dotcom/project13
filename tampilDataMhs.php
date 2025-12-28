<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
require "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM mhs");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>
<a href="tambahDataMhs.php">Tambah</a> |
<a href="cetakDataMhsPdf.php">Cetak PDF</a>
<br><br>

<table border="1">
<tr>
<th>No</th><th>NIM</th><th>Nama</th><th>Aksi</th>
</tr>

<?php $no=1; while($d=mysqli_fetch_assoc($data)) { ?>
<tr>
<td><?= $no++ ?></td>
<td><?= $d['nim'] ?></td>
<td><?= $d['nama'] ?></td>
<td>
<a href="koreksiDataMhs.php?kode=<?= $d['id'] ?>">Edit</a> |
<a href="hapusDataMhs.php?kode=<?= $d['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
</td>
</tr>
<?php } ?>

</table>
</body>
</html>
