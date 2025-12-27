<?php
include("config.php");

// Cek apakah tombol simpan sudah diklik atau belum
if(isset($_POST['simpan'])){

    // Ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // Buat query update
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query update berhasil?
    if( $query ) {
        // Kalau berhasil, alihkan ke halaman list-maba.php
        header('Location: list-maba.php');
    } else {
        // Kalau gagal, tampilkan pesan error
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}
?>