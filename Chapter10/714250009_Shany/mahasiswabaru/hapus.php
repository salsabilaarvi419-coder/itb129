<?php
include("config.php");

if(isset($_GET['id'])) {

    //mengambil id dari query string
    $id = $_GET['id'];

    //membuat query hapus
    $sql = "DELETE FROM mahasiswabaru WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //apakah query hapus berhasil?
    if($query){
        header('Location: list-maba.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}
?>
