<?php
$aksi="module/admin/aksi_pasien.php";

	switch($_GET[act])
	{

	default:
		// Tampil Data - mengambil file adminshow.php
		echo"<a href='?module=pasien&act=tambahuser' class='nav-link text-black'><i class='fa fa-plus-circle' ></i> Tambah</a>
		 <table id='rawat' class='table table-striped table-bordered 'cellspacing='0' width='150%'>
		 <thead>
			<tr>
				<th>NO</th> <th>Nama Pasien</th> <th>Alamat</th> <th>Umur</th> <th>Aksi</th>
			</tr></thead>";
			$no=0;
			
			$data = mysqli_query($konek,"SELECT * FROM pasien");	
			while($r = mysqli_fetch_array($data))
			{
				$no++;
		echo"<tr>
				<td>$no</td> <td>$r[nama_pasien]</td> <td>$r[alamat]</td> <td>$r[umur]</td>
				<td> 
					<a href='?module=pasien&act=edituser&id=$r[nama_pasien]'> <img src='edit.png' width=20px> </a> | 
					<a href='$aksi?module=pasien&act=hapus&id=$r[nama_pasien]'> <img src='hapus.png' width=20px> </a>
				</td>
			</tr>";
			}
		echo"</table>";
	break;

	// Tambah Data - memanggil file pasienfm.php
	case "tambahuser":
		echo"<form action='$aksi?module=pasien&act=input' method='POST'>
			<table class='table table-striped table-bordered'>
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
					<td></td>
					<td>
						<input class='btn btn-default' type=submit name=simpan value='Kirim'>
						<input class='btn btn-default' type=reset name=batal value='Batal'>
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
						<input type=text name=nama_pasien value='$r[nama_pasien]' disabled>
						<input type=hidden name='idh' value='$r[nama_pasien]'>
					</td>
				</tr>
            <tr>
				<td>Alamat</td> <td><input  class='form-control' type=text name=alamat></td>
			</tr>
			<tr>
				<td>Umur</td> <td><input  class='form-control' type=text name=umur></td>
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
	  