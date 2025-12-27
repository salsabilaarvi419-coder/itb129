<?php
include("config.php");
// Cek apakah form dikirim dengan metode POST dan tombol edit ditekan
if (isset($_POST['Edit'])) {

    // Ambil data dari form
    $id = $_POST['id']; // readonly, tidak bisa diubah
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

// Query UPDATE data berdasarkan id
    $sql = "UPDATE pendaftaran SET
            nama = '$nama',
            alamat = '$alamat',
            jenis_kelamin = '$jk',
            agama = '$agama',
            asal_sekolah = '$sekolah'
            WHERE id = '$id'";

    $query = mysqli_query($db, $sql);

    // Redirect setelah proses
    if ($query) {
        header("Location: list-maba.php");
    } else {
        header("Location: form-edit.php?id=$id");
    }
    exit();
}
?>