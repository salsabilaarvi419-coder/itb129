<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Pendaftaran Mahasiswa Baru</h3>
    </header>

    <nav>
        <a href="form-daftar.php" class="btn">[+] Tambah Data</a>
    </nav>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db, $sql);
            while($maba = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$maba['id']."</td>";
                echo "<td>".$maba['nama']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$maba['id']."'>Edit</a> | ";
                // Tambahkan class 'btn-hapus' untuk JavaScript
                echo "<a href='hapus.php?id=".$maba['id']."' class='btn-hapus'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script src="script.js"></script>
</body>
</html>