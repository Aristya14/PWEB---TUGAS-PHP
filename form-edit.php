<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style type="text/css">
		html, 
        body { 
            /* height: 100%;  */
            background-image: url("https://img.freepik.com/free-vector/black-golden-marble-background_23-2148981436.jpg?size=626&ext=jpg");
            background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
        }

        h3,label{
            color: white;
            font-weight: bolder;
        }

</style>
</head>

<body>
<div class="container">
    <header>
                <div class="container">
                    <div class="row" style="padding-top: 40px;">
                        <div class="col">
                        <h3>Formulir Edit Siswa</h3>
                        </div>
                        <div class="col">
                            <a class="dropdown-item text-end " href="index.php" style="color: white; font-weight: bolder;">
                                <i class="bi bi-arrow-left-circle-fill me-2"></i>
                                Kembali menu utama
                            </a>
                        </div>
                    </div>
                </div>
    </header>

    <div class="container shadow py-4 mt-5">

            <div class="p-5 mb-4 bg-light rounded-3 height: 4rem">
                    <h3 class="display-7 fw-bold" style="color: maroon">Formulir Edit data siswa</h3>
            </div>

    <form action="proses-edit.php" method="POST" enctype="multipart/form-data">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama']; ?>" placeholder="nama lengkap" required />
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat" required><?php echo $siswa['alamat']; ?></textarea>
            </div>

            <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
        </p>

            <div class="form-group mb-3">
                <label>Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" class="form-control" value="<?php echo $siswa['sekolah_asal']; ?>" placeholder="Masukan Sekolah Asal" required />
               
            </div>

            <div class="foto mb-3">
                <label for="foto" class="form-label">Masukkan Foto</label>
                <input class="form-control" name="foto" type="file" id="foto">
            </div>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
</div>
        </fieldset>


    </form>

    </body>
</html>