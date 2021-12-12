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
            /* height: 100%;  */
            background-image: url("https://img.freepik.com/free-vector/black-golden-marble-background_23-2148981436.jpg?size=626&ext=jpg");
            
            background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
        }
        h3,label,a,p{
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
    <br>

   

<div class="container shadow py-4 mt-5">

            <div class="p-5 mb-4 bg-light rounded-3 height: 4rem">
                    <h3 class="display-7" style="color: maroon;">Daftar siswa Mendaftar</h3>
            </div>

            <a href="form-daftar.php">
                <button class="btn btn-success">[+] Tambah Baru</button>
            </a>

    <table class="table table-striped " style="background-color: white">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td><img src='images/".$siswa['foto']."' width='100' height='100'></td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'class='btn btn-warning'>Edit</a> ";   
            echo "<a href='hapus.php?id=".$siswa['id']. "' class='btn btn-danger'>Hapus</a>";
      
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