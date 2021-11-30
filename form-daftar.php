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
            background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bb257388-0134-44a2-a865-18719b331540/d5xgl4n-042cc48f-47f6-4ea7-b09d-ed63339b3c5b.jpg/v1/fill/w_1024,h_647,q_75,strp/harry_potter_hogwarts_wallpaper_by_marcobarcelon_d5xgl4n-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjQ3IiwicGF0aCI6IlwvZlwvYmIyNTczODgtMDEzNC00NGEyLWE4NjUtMTg3MTliMzMxNTQwXC9kNXhnbDRuLTA0MmNjNDhmLTQ3ZjYtNGVhNy1iMDlkLWVkNjMzMzliM2M1Yi5qcGciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.4rt4mzX-eOOfA60zuTg1DyiUIYrTDfUGYCIvo8gk9F0");
            background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
        }

</style>
        </head>

<body>
    

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
            
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

            <div class="form-group">
                <label style="color: white; font-weight: bolder;">Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="nama lengkap" required />
            </div>

            <div class="form-group">
                <label style="color: white; font-weight: bolder;">Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>
            </div>

            <p>
                <label for="jenis_kelamin" style="color: white; font-weight: bolder;">Jenis Kelamin: </label>
                <label style="color: white; font-weight: bolder;"><input type="radio" name="jenis_kelamin" value="laki-laki" > Laki-laki</label>
                <label style="color: white; font-weight: bolder;"><input type="radio" name="jenis_kelamin" value="perempuan"  > Perempuan</label>
            </p>

            <p>
                <label for="agama" style="color: white; font-weight: bolder;">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Khonghucu</option>
                </select>
            </p>

            <div class="form-group mb-3">
                <label style="color: white; font-weight: bolder;">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" class="form-control" placeholder="Masukan Sekolah Asal" required />
            </div>
            
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
            

        </div>

        </fieldset>
    </form>

    </body>
</html>