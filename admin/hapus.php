<?php
include 'koneksi.php';

$id_pasien=$_GET['id_pasien'];

mysqli_query($conn,"DELETE FROM tb_pasien WHERE id_pasien='$id_pasien'") ;

header("location:index.php");
?>