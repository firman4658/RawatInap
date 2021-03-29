<?php
$aksi="module/dokter/aksi_dokter.php";

	switch($_GET[act])
	{

	default:
		// Tampil Data - mengambil file adminshow.php
		echo"<a href='?module=dokter&act=tambahuser' class='nav-link text-black'><i class='fa fa-plus-circle fa-lg' ></i> Tambah</a>
		 <table cellpadding='5px' id='rawat' class='table table-striped jambo_table bulk_action table-bordered align-middle' cellspacing='0' width='150%'>
		 <thead>
			<tr>
				<th>NO</th> <th>Username</th> <th>Nama Lengkap</th> <th>Alamat</th> <th>Password</th> <th>Foto</th> <th>Spesialis</th> <th>Kontak</th> <th>Aksi</th>
			</tr></thead>";
			$no=0;
			
			$data = mysqli_query($konek,"SELECT * FROM dokter");	
			while($r = mysqli_fetch_array($data))
			{
				$no++;
		echo"<tr class='align-middle'>
				<td>$no</td> <td>$r[username]</td> <td>$r[nama_lengkap]</td> <td>$r[alamat]</td> <td>$r[password]</td> <td><img src=build/images/dokter/$r[foto] width= 80px></td> <td>$r[spesialis]</td>  <td>$r[kontak]</td> 
				<td> 
					<a href='?module=dokter&act=edituser&id=$r[username]' > <i class='fa fa-pencil-square-o fa-2x' aria-hidden='true'></i> </a> | 
					<a href='$aksi?module=dokter&act=hapus&id=$r[username]'> <i class='fa fa-trash-o fa-2x' aria-hidden='true'></i> </a>
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
					<td>Nama Lengkap</td> <td><input  class='form-control' type=text name=nama_lengkap></td>
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
						<input class='btn btn-success' type=submit name=simpan value='Kirim'>
						<input class='btn btn-danger' type=reset name=batal value='Batal'>
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
						<input class='form-control' type=text name=username value='$r[username]' disabled>
						<input class='form-control' type=hidden name='idh' value='$r[username]'>
					</td>
				</tr>
				<tr>
				<td>Nama Lengkap</td> <td><input  class='form-control' type=text name='nama_lengkap' value=$r[nama_lengkap]></td>
			</tr>
            <tr>
				<td>Alamat</td> <td><input  class='form-control' type=text name=alamat value=$r[alamat]></td>
			</tr>
			<tr>
				<td>Password</td> <td><input class='form-control' type=password name=password value=$r[password]></td>
			</tr>
            <tr>
				<td>Foto</td> <td> <input  class='btn btn-default' type=file name=foto value=$r[foto]> 
			</td>
			<tr>
				<td>Spesialis</td> <td><input  class='form-control' type=text name=spesialis value=$r[spesialis]></td>
			</tr>
			<tr>
				<td>Kontak</td> <td><input  class='form-control' type=text name=kontak value=$r[kontak]></td>
			</tr>
				<tr>
					<td></td> 
					<td>
						<input type=submit class='btn btn-success' name=simpan value='Update'>
						<input type=reset class='btn btn-danger' name=batal value='Batal'>
					</td>
				</tr>
			</table>
		</form>";
	break;
}
?>
	  