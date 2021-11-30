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
            background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bb257388-0134-44a2-a865-18719b331540/d5xgl4n-042cc48f-47f6-4ea7-b09d-ed63339b3c5b.jpg/v1/fill/w_1024,h_647,q_75,strp/harry_potter_hogwarts_wallpaper_by_marcobarcelon_d5xgl4n-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjQ3IiwicGF0aCI6IlwvZlwvYmIyNTczODgtMDEzNC00NGEyLWE4NjUtMTg3MTliMzMxNTQwXC9kNXhnbDRuLTA0MmNjNDhmLTQ3ZjYtNGVhNy1iMDlkLWVkNjMzMzliM2M1Yi5qcGciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.4rt4mzX-eOOfA60zuTg1DyiUIYrTDfUGYCIvo8gk9F0");
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

    <form action="proses-edit.php" method="POST">

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
                <option <?php echo ($agama == 'Khonghucu') ? "selected": "" ?>>Khonghucu</option>
            </select>
        </p>

            <div class="form-group mb-3">
                <label>Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" class="form-control" value="<?php echo $siswa['sekolah_asal']; ?>" placeholder="Masukan Sekolah Asal" required />
               
            </div>

        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
</div>
        </fieldset>


    </form>

    </body>
</html>