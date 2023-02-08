<?php 
$nama=$_GET['Nama_Pengguna'];
include "koneksi.php";
mysqli_query($konek,'DELETE FROM tb_pengguna WHERE Nama_Pengguna="'.$nama.'"');
header("location:hapus1.php");