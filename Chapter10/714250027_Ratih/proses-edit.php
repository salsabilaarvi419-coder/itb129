<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $sumber_informasi = $_POST['sumber_informasi'];
    // buat query update
    $sql = "UPDATE pendaftaran SET nama='$nama', email='$email', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal', nomor_telepon='$nomor_telepon', sumber_informasi='$sumber_informasi' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-maba.php
        header('Location: list-maba.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}
?>