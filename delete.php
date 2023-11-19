<?php
include_once "init.php";
$id = $_GET['id'];

$query_delete = "DELETE FROM mahasiswa WHERE id=$id";
mysqli_query($koneksi, $query_delete);
header("Location:index.php");
?>