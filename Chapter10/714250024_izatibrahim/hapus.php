<?php
include 'config.php';

$id = $_GET['id'];
$sql = "DELETE FROM pendaftaram WHERE id='$id'";
$query = mysqli_query($db, $sql);

if ($query) {
    header("Location:list-maba.php?status=sukses");
} else {
    header("Location:list-maba.php?status=gagal");
}