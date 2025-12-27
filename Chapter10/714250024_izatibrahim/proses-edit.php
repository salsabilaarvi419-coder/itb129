<?php
include 'config.php';

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['submit'])) {
    
    //ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    //buat query update
    $sql = "UPDATE pendaftaram SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    //cek apakah query berhasil
    if ($query) {
        header('Location: list-maba.php?status=sukses');
    } else {
        header('Location: list-maba.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>