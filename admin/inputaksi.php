<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$gender=$_POST['gender'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];

mysqli_query($conn,"INSERT INTO tb_pasien VALUES ('','$nama','$gender','$alamat','$no_hp')");

header("location:index.php");

?>