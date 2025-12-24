<?php

$server = "localhost";
$user = "root";
$password = ""; // <--- PASTIKAN INI KOSONG JIKA MENGGUNAKAN XAMPP DEFAULT
$nama_database = "mahasiswabaru";

$db = mysqli_connect($server, $user, $password, $nama_database);
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>