<?php
$nama=$_POST["nama"];
$sandi=$_POST["sandi"];
include "koneksi.php";
$kueri=mysqli_query($konek,"SELECT * FROM tb_pengguna WHERE nama_pengguna='$nama' AND sandi_pengguna='$sandi' ");
if(mysqli_num_rows($kueri)>0){
	// ini nanti di redirect ke halaman utama
	header("location:lihat_pengguna.php");
}else{
		// ini nanti di redirect ke halaman login
	header("location:login2.html");	
}
