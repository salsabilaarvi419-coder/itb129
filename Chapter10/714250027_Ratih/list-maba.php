<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendsaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
        <h3>Daftar Calon Mahasiswa Baru</h3>
    </header>

    <nav>
        <a href="form-daftar.php" class="btn btn-submit" style="width: auto;">[+] Tambah Data</a>
    </nav>

    <br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Nomor Telepon</th>
                <th>Sumber Informasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db, $sql) or die(mysqli_error($db));

            $no = 1;
            
            while($maba = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$no."</td>";
                echo "<td>".$maba['nama']."</td>";
                echo "<td>".$maba['email']."</td>";
                echo "<td>".$maba['alamat']."</td>";
                echo "<td>".$maba['jenis_kelamin']."</td>";
                echo "<td>".$maba['agama']."</td>";
                echo "<td>".$maba['sekolah_asal']."</td>";
                echo "<td>".$maba['nomor_telepon']."</td>";
                echo "<td>".$maba['sumber_informasi']."</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=".$maba['id']."' class='btn-edit'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$maba['id']."' class='btn-hapus'>Hapus</a>";
                echo "</td>";
                echo "</tr>";

                $no++;
            }
            ?>

        </tbody>
    </table>
    <p class="total">Total: <?php echo mysqli_num_rows($query); ?></p>
</div>
<script src="script.js"></script>
</body>
</html>