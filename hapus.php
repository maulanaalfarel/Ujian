<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
        a {
            text-decoration: none;
            color :white;
        }
	</style>
</head>
<body bgcolor="tosca" style="color:white;">
	<table  width="100%">
		<tr>
            <td colspan="2">
                <center>
                    <h1>FORM HAPUS</h1>
                </center>
            </td>
		</tr>
		<tr>
			<td width="25%">
                <ul>
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
                <h1>Lihat Pengguna</h1>
                <?php 
                    include "koneksi.php";
                    $kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
                    ?>
                   <center>
				    <table width="50%" border="2">
                    </center>
                        <tr>

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
                            <td colspan="2">
                                <center>
                                    <b>
                                    Aksi
                                    </b>
                                </center>
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
                    <a href='hapus.php?apanih=".$row['Nama_Pengguna']."'>Hapus</a> ";
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