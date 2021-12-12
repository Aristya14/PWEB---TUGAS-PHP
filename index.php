<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
<style type="text/css">
		html, 
        body { 
            height: 100%; 
            background-image: url("https://img.freepik.com/free-vector/black-golden-marble-background_23-2148981436.jpg?size=626&ext=jpg");
            background-position: center;
  			background-repeat: no-repeat;
  			background-size: cover;
        }
        .tombol{
            background-color : blue;
            color : white;
        }
		.mid-center { 
            top: 50%; 
            left: 50%; 
            transform: translateX(-50%) translateY(-50%); 
        }
        .des{
            color: white;
            font-size: 2em;
            text-align : center;
            padding-top: 30px; 
            padding-bottom: 20px;
        }
        .helo {
            color: white;
            font-size: 70px;
            font-weight: bolder;
            text-align : center;
            padding-top: 200px;
        }
        .notifikasi {
            color: rgba(255, 255, 255, 0.5);
        }
        footer {
            margin-top: 250px;
            color: rgba(255, 255, 255, 0.8);
        }

        .notif{
            color: rgba(255, 255, 255, 1);
            font-size: 1em;
            text-align : center;
            padding-top: 50px;
        }

	</style>
<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <main>
        <!-- <div class="container py-4">

            <header class="pb-3 mb-4 border-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
            </svg>
            <span class="fs-4">Pendaftaran Siswa Baru | SMK Coding</span>
            </header> -->


            <!-- <div class="p-5 mb-4 bg-light rounded-3"> -->
                <!-- <div class="container-fluid py-5"> -->
                    <p class="helo">Selamat Datang Pejuang !!!</p>
                    <p class="des">di situs Pendaftaran Siswa Baru SMK Coding</p>
                <!-- </div> -->
            <!-- </div> -->
            <div style="text-align: center;">
                <a href="form-daftar.php" class="btn btn-outline-secondary tombol" type="button" >Daftar Baru</a>
                <a href="list-siswa.php" class="btn btn-outline-secondary tombol" type="button">Lihat Pendaftar</a>
            </div>

            <!-- <?php if(isset($_GET['status'])): ?>
            <p class="notif">
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                        

                    } 
                    else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p> -->
        <?php endif; ?>


        <!-- </div> -->
    </main>

   

</body>
</html>