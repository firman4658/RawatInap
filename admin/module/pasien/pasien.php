<?php
$aksi="module/pasien/aksi_pasien.php";

	switch($_GET[act])
	{

	default:
		// Tampil Data - mengambil file adminshow.php
		echo"<a href='?module=pasien&act=tambahuser' class='nav-link text-black'><i class='fa fa-plus-circle fa-lg'></i> Tambah</a>
		<table cellpadding='40px' id='rawat' class='table table-striped jambo_table bulk_action table-bordered align-middle' cellspacing='0' width='140%'>
		 <thead>
			<tr>
				<th>NO</th> <th>Nama Pasien</th> <th>Alamat</th> <th>Umur</th> <th>Jenis Kelamin</th> <th>pekerjaan</th> <th>Status</th> <th>Agama</th> <th>Telepon</th> <th>Tanggal lahir</th> <th>Tanggal daftar</th><th>No Rekam medis</th> <th>pilihan</th>
			</tr></thead>";
			$no=0;
			
			$data = mysqli_query($konek,"SELECT * FROM pasien");	
			while($r = mysqli_fetch_array($data))
			{
				$no++;
		echo"<tr>
				<td>$no</td> <td>$r[nama_pasien]</td> <td>$r[alamat]</td> <td>$r[umur]</td> <td>$r[jenis_kelamin]</td> <td>$r[pekerjaan]</td> <td>$r[status]</td> <td>$r[agama]</td> <td>$r[tlpn]</td> <td>$r[ttlahir]</td> <td>$r[tgl_daftar]</td> <td>$r[no_rekam]</td>
				<td> 
					<a href='?module=pasien&act=edituser&id=$r[id_pasien]'> <i class='fa fa-pencil-square-o fa-2x' aria-hidden='true'></i> </a> | 
					<a href='$aksi?module=pasien&act=hapus&id=$r[id_pasien]'> <i class='fa fa-trash-o fa-2x' aria-hidden='true'></i> </a>
				</td>
			</tr>";
			}
		echo"</table>";
	break;

	// Tambah Data - memanggil file pasienfm.php
	case "tambahuser":
		echo"<form action='$aksi?module=pasien&act=input' method='POST'>
			<table class='table table-striped table-bordered' >
				<tr>
					<td>Nama Pasien</td> <td><input class='form-control' type=text name=nama_pasien></td>
				</tr>
                <tr>
					<td>Alamat</td> <td><input  class='form-control' type=text name=alamat></td>
				</tr>
				<tr>
					<td>Umur</td> <td><input  class='form-control' type=text name=umur></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td> <td><input  class='form-control' type=text name=jenis_kelamin></td>
				</tr>
				<tr>
				<td>Pekerjaan</td> <td><input  class='form-control' type=text name=pekerjaan></td>
				</tr>
				<tr>
						<td>Status</td> <td><input  class='form-control' type=text name=status></td>
				</tr>
				<tr>
						<td>Agama</td> <td><input  class='form-control' type=text name=agama></td>
				</tr>
				<tr>
						<td>Telepon</td> <td><input  class='form-control' type=text name=tlpn></td>
				</tr>
				<tr>
						<td>Tanggal Lahir</td> <td><input  class='form-control' type=text name=ttlahir></td>
				</tr>
				<tr>
						<td>Tanggal daftar</td> <td><input  class='form-control' type=text name=tgl_daftar></td>
				</tr>
				<tr>
						<td>No Rekam medis</td> <td><input  class='form-control' type=text name=no_rekam></td>
				</tr>
				<tr>
						<td>Asuransi</td> <td><input  class='form-control' type=text name=asuransi></td>
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
		
	// Edit Data - memanggil file pasieneditfm.php
	case "edituser":
		
			$data = mysqli_query($konek,"SELECT * FROM pasien where nama_pasien='$_GET[id]'");
			$r = mysqli_fetch_array($data);
				
		echo"<form action='$aksi?module=pasien&act=update' method='POST'>
			<table class='table table-striped table-bordered'>
				<tr>
					<td>Nama Pasien</td> 
					<td>
						<input class='form-control' type=text name=nama_pasien value='$r[nama_pasien]' disabled>
						<input class='form-control' type=hidden name='idh' value='$r[nama_pasien]'>
					</td>
				</tr>
            <tr>
				<td>Alamat</td> <td><input  class='form-control' type=text name=alamat value=$r[alamat]></td>
			</tr>
			<tr>
				<td>Umur</td> <td><input  class='form-control' type=text name=umur value=$r[umur]></td>
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
	  