<?php 
include "koneksi.php";
$id=$_POST['bety_natalia_nahampun'];
$nama=$_POST['nama'];
$katasandi=$_POST['boleeeh'];
mysqli_query($konek,"INSERT INTO login1 (id,nama,katasandi) VALUES ('".$id."','".$nama."','".$katasandi."')");
header("location:lihat_pengguna.php");