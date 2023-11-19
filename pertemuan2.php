<?php 
  include_once "init.php";
   $query = "SELECT * FROM mahasiswa";
   $result = mysqli_query($koneksi, $query);
   echo '<a href="insert.php">insert</a><br>';
   while($data = mysqli_fetch_assoc($result)) {
      echo '<a href="delete.php?id='.$data['id'].'">delete</a> ';
      echo '<a href="update.php?id='.$data['id'].'">update</a><br>';
      echo "Id : ".$data['id']."<br>"; 
      echo "Nama : ".$data['nama']."<br>";
      echo "NIM : ".$data['nim']."<br>";
      if($data['jenis_kelamin'] == "l"){
         echo " Jenis Kelamin : Pria<hr>";
      } else {
         echo " Jenis Kelamin : Wanita<hr>";
      }
    
   }

   $query_insert = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin) VALUES('inan', 202265084, 'wanita')";
   $query_update = "UPDATE` mahasiswa SET nama='inan', nim=202265084, jenis_kelamin='wanita' WHERE id=1";
   $query_delete = "DELETE FROM mahasiswa WHERE id=2";
   mysqli_query($koneksi, $query_delete);



?>