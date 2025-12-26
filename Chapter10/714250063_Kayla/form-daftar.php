<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
</head>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
<body>
    <div class="container">
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>

            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
            </p>

            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>

            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
            </p>

            <p>
                <input type="submit" value="Daftar" name="daftar" class="btn" />
            </p>
        </fieldset>
    </div>
</body>
</html>