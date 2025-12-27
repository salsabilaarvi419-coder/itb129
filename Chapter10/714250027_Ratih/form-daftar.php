<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Mahasiswa Baru | Universitas Logistik  dan Bisnis Internasional</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru</h3>
        <h3>Universitas Logistik dan Bisnis Internasional</h3>
    </header>

    <form action="proses-daftar.php" method="POST">

        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap" />
            </p>

            <p>
                <label for="email">E-mail: </label>
                <input type="text" name="email" placeholder="contoh@contoh.com" />
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
                    <option value="" selected disabled>-- Pilih Agama --</option>
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
                <label for="nomor_telepon">Nomor Telepon: </label>
                <input type="text" name="nomor_telepon" placeholder="+62/081256872456" />
            </p>

            <p>
                <label for="sumber_informasi">Sumber Informasi: </label>
                <select name="sumber_informasi">
                    <option value="" selected disabled>-- Mengenal ULBI dari ? --</option>
                    <option>Brosur (CETAK)</option>
                    <option>Pameran</option>
                    <option>Solusi/Kunjungan ULBI di Sekolah</option>
                    <option>Media Sosial</option>
                    <option>Situs Web ULBI</option>
                    <option>Guru BK</option>
                    <option>Dosen ULBI</option>
                    <option>Alumni ULBI</option>
                    <option>Teman/Relasi</option>
                    <option>Lainnya</option>
                </select>
            </p>

            <p>
                <input type="submit" value="Daftar" name="daftar" class="btn-submit" />
            </p>
        </fieldset>
</div>
<script src="script.js"></script>
</body>
</html>