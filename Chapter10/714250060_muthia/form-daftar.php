<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Formulir Pendaftaran Mahasiswa Baru</h1>
            <h1>POLTEKPOS</h1>
        </header>

        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>

                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="nama lengkap" required/>
                </p>

                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" required></textarea>
                </p>

                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="laki-laki" > Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
                    </label>
                </p>

                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama" required>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>

                <p>
                    <label for="asal_sekolah">Sekolah Asal: </label>
                    <input type="text" name="asal_sekolah" placeholder="nama sekolah" required />
                </p>

                <p>
                    <input type="submit" value="Daftar" name="daftar" required />
                </p>

            </fieldset>
        </form>
    </div>
</body>
</html>