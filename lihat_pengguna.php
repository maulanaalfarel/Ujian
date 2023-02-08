<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
</head>
<body 
<table width="50%" bgcolor='slateblue'>
		<tr>
			
				<center><h1><font color="white">SELAMAT DATANG DIHALAMAN RUMAH FAREL</h1></center></font>
	</tr>
	<tr>		
			<td width="35%" >
			<b><u>MENU SEBELAH KIRI</u></b><br>
			<ul >
				<li>
					<a href="halaman_beranda.php">
						Beranda
					</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Lihat Pengguna</a>
				</li>
				<li>
					<a href="tambah_pengguna.php">Tambah Pengguna</a>
				</li>
				<li>
					<a href="hapus.php">Hapus Pengguna</a>
				</li>
				<li>
					<a href="update_data.php">Edit Pengguna</a>
				</li>
			</ul>
			</td>
			<td>
			<b><u> <center> LIST PENGGUNA </center></u></b><br>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
				?>
                <center>
				<table width="50%" border="2">
                </center>
					
					<tr bgcolor='azure'>

						<td>
							<b>
							Id Pengguna
						</b>
						</td> 
						<td>
							<b>
							Nama Pengguna
						</b>
						</td>
						<td>
							<b>
							Sandi Pengguna
						</b>
						</td>
					</tr>

				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['Id_Pengguna'];
					echo"</td><td>";
					echo $row['Nama_Pengguna'];
					echo"</td><td>";
					echo $row['sandi_Pengguna'];
					echo"</td>
					<td>";
					echo"
						<a href='hapus.php?apanih=".$row['Nama_Pengguna']."	' </a>
					";
					echo"&nbsp&nbsp&nbsp
						<a href='update_data.php?Id=".$row['Id_Pengguna']."&nama=".$row['Nama_Pengguna']."&sandi=".$row['sandi_Pengguna']."	'</a>
					";

				}
			?>
			</table>
			</td>
		</tr>
	</table>
</body>
</html>