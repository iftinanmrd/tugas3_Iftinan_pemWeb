<?php
include_once "init.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jenis_kelamin'];
    
    
    $query_insert = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin) VALUES('$nama', '$nim', '$jk')";
    mysqli_query($koneksi, $query_insert);
    header("Location: index.php");
}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        hr{
            margin: 5px 0;
        }
        .container{
            padding: 10px 150px;
        }
        header, footer{
            padding: 150px 0;
            height: auto;
            background-color: #84a98c;
        }
        .body-atas{
            display: flex;
        }
        .body-atas form{
            margin-left: auto;
        }
        .input{
            padding: 5px;
            border: 1px solid silver;
            border-radius: 5px;
            width: 100%;
        }
        .tombol{
            background-color: #2f3e46;
            padding: 5px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            border: 1px solid grey;
        }
        .tombol:hover{
            background-color: grey;
            border: 1px solid black;
        }
        .body-isi .daftar{
            height: auto;
            padding: 5px;
            margin: 5px 0px;
            border-radius: 5px;
            border: 1px solid grey;
            display: flex;
        }

        .daftar:hover{
            background-color: silver;
        }
        .aksi{
            margin-left: auto;
        }
    </style>
</head>
<body>
    <header class="container">
        <h1>Data Mahasiswa</h1>
    </header>


    <div class="body container">
        <div class="body-atas">
            <h3>Form Tambah Data Mahasiswa</h3>
            <form action="" method="get">
                <a href="index.php" class="tombol">Kembali</a>
            </form>
        </div>
        <hr>
        <form action="" method="post">
            Nama Mahasiswa <br>
            <input class="input" type="text" name="nama" placeholder="Isi Nama..">
            <br><br>
            NIM Mahasiswa <br>
            <input class="input" type="text" name="nim" placeholder="Isi NIM..">
            <br><br>
            jenis kelamin Mahasiswa <br>
            <input class="input" type="text" name="jenis_kelamin" placeholder="Isi jenis kelamin..">
            <br><br> 
            <input class="tombol" type="submit" name="simpan" value="Simpan">
        </form>
    </div>


    <footer class="container">
        <p>&copy;Iftinan | 614</p>
    </footer>
</body>
</html>