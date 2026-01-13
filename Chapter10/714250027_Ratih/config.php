<?php
$server = "localhost:3306";
$user = "root";
$password = "";
$namadb = "formpendaftaran";

$db = mysqli_connect($server, $user, $password, $namadb);

if(!$db){
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
?>