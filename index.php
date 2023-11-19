<?php
include_once "init.php";

$query_select  = "SELECT * FROM mahasiswa ORDER BY id DESC";
$result = mysqli_query($koneksi, $query_select);
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
            width: 250px;
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
            <a href="insert.php" class="tombol">Tambah Data Mahasiswa</a>
            <form action="" method="get">
                <input type="text" name="data" placeholder="Ketikan Sesuatu.." class="input">
                <input type="submit" name="cari" value="Cari" class="tombol">
            </form>
        </div>
        <hr>
        <?php while($mhs = mysqli_fetch_assoc($result)){ ?>
            <div class="body-isi">
                <div class="daftar">
                    <div class="data">
                        Nama : <b><?= $mhs ['nama'] ?></b><br>
                        NIM : <?= $mhs ['nim'] ?><br>
                        Jenis Kelamin : <?= $mhs ['jenis_kelamin'] ?><br>
                        Id : <?= $mhs['id'] ?><br>
                    </div>
                    <div class="aksi">
                        <a href="update.php?id=<?= $mhs['id'] ?>" class="tombol">Ubah</a> 
                        <a href="delete.php?id=<?= $mhs['id'] ?>" class="tombol">Hapus</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


    <footer class="container">
        <p>&copy;Iftinan | 614 </p>
    </footer>
</body>
</html>