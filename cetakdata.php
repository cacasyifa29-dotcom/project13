<?php
require 'koneksi.php';

$q = mysqli_query($koneksi, "SELECT * FROM mhs");

echo "Jumlah data: " . mysqli_num_rows($q) . "<br><br>";

while($r = mysqli_fetch_assoc($q)){
    print_r($r);
    echo "<br>";
}
