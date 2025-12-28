<?php
$koneksi = mysqli_connect("localhost", "root", "", "universitas");

if (!$koneksi) {
    die("KONEKSI DATABASE GAGAL: " . mysqli_connect_error());
}
