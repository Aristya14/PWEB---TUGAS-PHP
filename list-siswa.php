<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style type="text/css">
		html, 
        body { 
            height: 100%; 
            background-image: url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bb257388-0134-44a2-a865-18719b331540/d5xgl4n-042cc48f-47f6-4ea7-b09d-ed63339b3c5b.jpg/v1/fill/w_1024,h_647,q_75,strp/harry_potter_hogwarts_wallpaper_by_marcobarcelon_d5xgl4n-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjQ3IiwicGF0aCI6IlwvZlwvYmIyNTczODgtMDEzNC00NGEyLWE4NjUtMTg3MTliMzMxNTQwXC9kNXhnbDRuLTA0MmNjNDhmLTQ3ZjYtNGVhNy1iMDlkLWVkNjMzMzliM2M1Yi5qcGciLCJ3aWR0aCI6Ijw9MTAyNCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.4rt4mzX-eOOfA60zuTg1DyiUIYrTDfUGYCIvo8gk9F0");
            background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
        }

        h3,label,a,p,th{
            color: white;
            font-weight: bolder;
        }

</style>
</head>

<body>
    <header>
                 <div class="container">
                    <div class="row" style="padding-top: 40px;">
                        <div class="col">
                        <h3>Siswa yang sudah mendaftar</h3>
                        </div>
                        <div class="col">
                            <a class="dropdown-item text-end " href="index.php" style="color: white; font-weight: bolder;">
                                <i class="bi bi-arrow-left-circle-fill me-2"></i>
                                Kembali menu utama
                            </a>

                            <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>
                        </div>
                    </div>
                </div>
    </header>

   

    <br>
<div class="container">
    <table class="table table-bordered table-hover">
    <thead>
        <tr bgcolor='brown' align='center'>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody bgcolor='#DCDCDC' align='center'>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
           
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</div>
    </body>
</html>