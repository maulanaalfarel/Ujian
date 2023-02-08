<?php
include "koneksi.php";
$id=$_POST["Id_Pengguna"];
$nama=$_POST["Nama_Pengguna"];
$sandi=$_POST["sandi_Pengguna"];
$kueri=mysqli_query($konek,"INSERT INTO tb_pengguna (id,nama,sandi) VALUES ('".$id."','".$nama."','".$sandi."')");
if($kueri){
	// ini nanti di redirect ke halaman utama
	header("location:lihat_pengguna.php");
}else{
		// ini nanti di redirect ke halaman login
	header("location:tambah_pengguna.php");	
}