<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
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
        label{
            color: white;
        }

</style>
        </head>

<body>
    
        <div class="container">

            <header>
                <div class="container">
                    <div class="row" style="padding-top: 40px;">
                        <div class="col">
                            <h3 style="color: white; font-weight: bolder;">Formulir Pendaftaran Siswa Baru</h3>
                        </div>
                        <div class="col">
                            <a class="dropdown-item text-end " href="index.php" style="color: white; font-weight: bolder;">
                                <i class="bi bi-arrow-left-circle-fill me-2" style="color: white; font-weight: bolder;"></i>
                                Kembali menu utama
                            </a>
                        </div>
                    </div>
                </div>
            </header>
    </div>
<form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            
        <div class="container shadow py-4 mt-5">
            <div class="p-5 mb-4 bg-light rounded-3 height: 4rem">
                    <h3 class="display-7" style="color: maroon">Formulir Pendaftaran siswa</h3>
            </div>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="nama lengkap" required />
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>
            </div>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
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
            <div class="form-group mb-3">
                <label>Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" class="form-control" placeholder="Masukan Sekolah Asal" required />
            </div>
            
            <div class="foto mb-3">
                <label for="foto" class="form-label">Masukkan Foto</label>
                <input class="form-control" name="foto" type="file" id="foto">
            </div>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
            
        </div>
        </fieldset>
    </form>

    </body>
</html>