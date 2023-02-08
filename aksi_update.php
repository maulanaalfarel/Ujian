<?php
include "koneksi.php";
$nama=$_POST['nama'];
$password=$_POST['boleeeh'];
$query="UPDATE tb_pengguna SET sandi_Pengguna='$password' WHERE  nama='$nama'";
mysqli_query($konek, $query);
header("location:lihat_pengguna.php");
