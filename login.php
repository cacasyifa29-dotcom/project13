<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:tampilDataMhs.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Sistem</title>
</head>
<body>

<h2>LOGIN</h2>

<form method="post">
    NIM :
    <input type="text" name="nim" required><br><br>
    Password :
    <input type="password" name="passw" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {
    require "koneksi.php";

    $nim = $_POST['nim'];
    $pass = $_POST['passw'];

    $sql = "SELECT * FROM mhs WHERE nim='$nim' LIMIT 1";
    $query = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($query) == 1) {
        $data = mysqli_fetch_assoc($query);
        if (password_verify($pass, $data['pass'])) {
            $_SESSION['username'] = $data['nim'];
            header("location:tampilDataMhs.php");
        } else {
            echo "Password salah";
        }
    } else {
        echo "NIM tidak ditemukan";
    }
}
?>
</body>
</html>
