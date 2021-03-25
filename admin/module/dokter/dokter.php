<?php
$aksi="module/admin/aksi_dokter.php";

	switch($_GET[act])
	{

	default:
		// Tampil Data - mengambil file adminshow.php
		echo"<a href='?module=dokter&act=tambahuser' class='nav-link text-black'><i class='fa fa-plus-circle' ></i> Tambah</a>
		 <table id='rawat' class='table table-striped table-bordered 'cellspacing='0' width='150%'>
		 <thead>
			<tr>
				<th>NO</th> <th>Username</th> <th>Nama Lengkap</th> <th>Alamat</th> <th>Password</th> <th>Foto</th> <th>Spesialis</th> <th>Kontak</th> <th>Aksi</th>
			</tr></thead>";
			$no=0;
			
			$data = mysqli_query($konek,"SELECT * FROM dokter");	
			while($r = mysqli_fetch_array($data))
			{
				$no++;
		echo"<tr>
				<td>$no</td> <td>$r[username]</td> <td>$r[nama_lengkap]</td> <td>$r[alamat]</td> <td>$r[password]</td> <td><img src=dist/img/admin/$r[foto] width= 80px></td> <td>$r[spesialis]</td>  <td>$r[kontak]</td> 
				<td> 
					<a href='?module=dokter&act=edituser&id=$r[username]'> <img src='edit.png' width=20px> </a> | 
					<a href='$aksi?module=dokter&act=hapus&id=$r[username]'> <img src='hapus.png' width=20px> </a>
				</td>
			</tr>";
			}
		echo"</table>";
	break;

	// Tambah Data - memanggil file dokterfm.php
	case "tambahuser":
		echo"<form action='$aksi?module=dokter&act=input' method='POST'>
			<table class='table table-striped table-bordered'>
				<tr>
					<td>Username</td> <td><input class='form-control' type=text name=username></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td> <td><input  class='form-control' type=text name=nm_lengkap></td>
				</tr>
                <tr>
					<td>Alamat</td> <td><input  class='form-control' type=text name=alamat></td>
				</tr>
				<tr>
					<td>Password</td> <td><input class='form-control' type=password name=password></td>
				</tr>
                <tr>
					<td>Foto</td> <td> <input  class='btn btn-default' type=file name=foto> 
				</td>
				<tr>
					<td>Spesialis</td> <td><input  class='form-control' type=text name=spesialis></td>
				</tr>
				<tr>
					<td>Kontak</td> <td><input  class='form-control' type=text name=kontak></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input class='btn btn-default' type=submit name=simpan value='Kirim'>
						<input class='btn btn-default' type=reset name=batal value='Batal'>
					</td>
				</tr>
			</table>
		</form>";	
	break;
		
	// Edit Data - memanggil file doktereditfm.php
	case "edituser":
		
			$data = mysqli_query($konek,"SELECT * FROM dokter where username='$_GET[id]'");
			$r = mysqli_fetch_array($data);
				
		echo"<form action='$aksi?module=dokter&act=update' method='POST'>
			<table class='table table-striped table-bordered'>
				<tr>
					<td>Username</td> 
					<td>
						<input type=text name=username value='$r[username]' disabled>
						<input type=hidden name='idh' value='$r[username]'>
					</td>
				</tr>
				<tr>
				<td>Nama Lengkap</td> <td><input  class='form-control' type=text name=nm_lengkap></td>
			</tr>
            <tr>
				<td>Alamat</td> <td><input  class='form-control' type=text name=alamat></td>
			</tr>
			<tr>
				<td>Password</td> <td><input class='form-control' type=password name=password></td>
			</tr>
            <tr>
				<td>Foto</td> <td> <input  class='btn btn-default' type=file name=foto> 
			</td>
			<tr>
				<td>Spesialis</td> <td><input  class='form-control' type=text name=spesialis></td>
			</tr>
			<tr>
				<td>Kontak</td> <td><input  class='form-control' type=text name=kontak></td>
			</tr>
				<tr>
					<td></td> 
					<td>
						<input type=submit class='btn btn-default' name=simpan value='Update'>
						<input type=reset class='btn btn-default' name=batal value='Batal'>
					</td>
				</tr>
			</table>
		</form>";
	break;
}
?>
	  