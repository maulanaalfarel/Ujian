<!DOCTYPE html>
<html>
<head>
	<title>Form Biodata</title>
</head>
<body bgcolor="violet">
	<table width="50%">
		<tr>
		<form action="proses_tambah_pengguna.php" method="POST">
			
				<center><h1><font color="white"><b>FORM TAMBAH DATA</b></h1></center></font>
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
		<table width=25% border="3" align="center" bgcolor=tosca">
		<tr>
			<td>
				NAMA
			</td>
			<td>
				<INPUT NAME="Nama_Pengguna" TYPE="TEXT" PLACEHOLDER="nama anda">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<INPUT NAME="sandi_Pengguna" TYPE="PASSWORD" PLACEHOLDER="password anda">
			</td>
		</tr>
		<tr>
			
			<td>
				<INPUT  TYPE="submit" value="Kirim Data">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>