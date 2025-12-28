<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>

<h2>Input Data Mahasiswa</h2>

<form action="simpanDataMhs.php" method="POST">
NIM: <input type="text" name="nim" required><br><br>
Nama: <input type="text" name="nama" required><br><br>
Tempat Lahir: <input type="text" name="tempatLahir"><br><br>
Tanggal Lahir: <input type="date" name="tanggalLahir"><br><br>
Jumlah Saudara: <input type="number" name="jmlSaudara"><br><br>

Alamat:<br>
<textarea name="alamat"></textarea><br><br>

Kota:
<select name="kota">
<option>Semarang</option>
<option>Solo</option>
<option>Brebes</option>
<option>Kudus</option>
</select><br><br>

Jenis Kelamin:
<input type="radio" name="jk" value="Pria">Pria
<input type="radio" name="jk" value="Wanita">Wanita
<br><br>

Status:
<input type="radio" name="statusKeluarga" value="Belum Menikah">Belum Menikah
<input type="radio" name="statusKeluarga" value="Menikah">Menikah
<br><br>

Hobi:<br>
<input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
<input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br>
<input type="checkbox" name="hobi[]" value="Musik"> Musik<br>
<input type="checkbox" name="hobi[]" value="Traveling"> Traveling<br><br>

Email: <input type="email" name="email"><br><br>
Password: <input type="password" name="password"><br><br>

<input type="submit" value="Simpan">
</form>

</body>
</html>
