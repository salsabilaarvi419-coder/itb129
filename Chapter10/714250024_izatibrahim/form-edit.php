<?php
include 'config.php';

$id = $_GET['id'];

        $sql = "SELECT * FROM pendaftaram WHERE id='$id'";
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Mahasiswa Baru</title>
</head>
<body>
    <header>
        <h2>Form Edit Data Mahasiswa Baru</h2>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <input type="text" name="id" value="<?php echo $data['id']; ?>" disabled>

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required>
            </p>

            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" id="alamat" required><?php echo $data['alamat']; ?></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <select name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="Laki-laki" <?php if($data['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if($data['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                </select>
            </p>

            <p>
                <label for="agama">Agama: </label>
                <select name="agama" id="agama" required>
                    <option value="Islam" <?php if($data['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Kristen" <?php if($data['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                    <option value="Hindu" <?php if($data['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Budha" <?php if($data['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                    <option value="Atheis" <?php if($data['agama'] == 'Atheis') echo 'selected'; ?>>Atheis</option>
                </select>
            </p>

            <p>
                <label for="asal_sekolah">Asal Sekolah: </label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?php echo $data['asal_sekolah']; ?>" required>
            </p>

            <p>
                <input type="submit" value="Simpan Perubahan">
            </p>
        </fieldset>
    </form>
</body>
</html>