<?php
$aksi="module/kamar/aksi_kamar.php";

	switch($_GET['act'])
	{

	default:
		// Tampil Data - mengambil file kamarshow.php
		echo"<a href='?module=kamar&act=tambahuser' class='nav-link text-black'><i class='fa fa-plus-circle fa-lg'></i> Tambah</a>
		<table cellpadding='5px' id='rawat' class='table table-striped jambo_table bulk_action table-bordered align-middle' cellspacing='0' width='150%'>
		 <thead>
			<tr>
				<th>NO</th> <th>Kode Kamar</th> <th>Nama Kamar</th> <th>Tipe Kamar</th> <th>Harga</th> <th>Aksi</th>
			</tr></thead>";
			$no=0;
			
			$data = mysqli_query($konek,"SELECT * FROM kamar");	
			while($r = mysqli_fetch_array($data))
			{
				$no++;
		echo"<tr>
				<td>$no</td> <td>$r[id_kamar]</td> <td>$r[nama_kamar]</td> <td>$r[tipe_kamar]</td> <td>$r[harga]</td>
				<td> 
					<a href='?module=kamar&act=edituser&id=$r[id_kamar]'> <i class='fa fa-pencil-square-o fa-2x' aria-hidden='true'></i> </a> | 
					<a href='$aksi?module=kamar&act=hapus&id=$r[id_kamar]'> <i class='fa fa-trash-o fa-2x' aria-hidden='true'></i> </a>
				</td>
			</tr>";
			}
		echo"</table>";
	break;

	// Tambah Data - memanggil file kamarfm.php
	case "tambahuser":
		echo"<form action='$aksi?module=kamar&act=input' method='POST'>
			<table class='table table-striped table-bordered'>
				<tr>
					<td>Nama Kamar</td> <td><input class='form-control' type=text name=nama_kamar></td>
				</tr>
				<tr>
				<td>Tipe Kamar</td>
				<td>
					<input type=radio name=tipe_kamar value=VIP checked>VIP
					<input type=radio name=tipe_kamar value=Reguler checked>Reguler
					
				</td>
				</tr>
				<tr>
					<td>Harga</td> <td><input  class='form-control' type=text name=harga></td>
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
		
	// Edit Data - memanggil file kamareditfm.php
	case "edituser":
		
			$data = mysqli_query($konek,"SELECT * FROM kamar where id_kamar='$_GET[id]'");
			$r = mysqli_fetch_array($data);
				
		echo"<form action='$aksi?module=kamar&act=update' method='POST'>
			<table class='table table-striped table-bordered'>
				<tr>
					<td>Nama Kamar</td> 
					<td>
						<input class='form-control' type=text name=nama_kamar value='$r[nama_kamar]' disabled>
						<input class='form-control' type=hidden name='idh' value='$r[nama_kamar]'>
					</td>
				</tr>
				<tr>
				<td>Tipe Kamar</td>
				<td>
					<input type=radio name=tipe_kamar value=VIP checked>VIP
					<input type=radio name=tipe_kamar value=Reguler checked>Reguler
				</td>
				</tr>
			<tr>
				<td>Harga</td> <td><input  class='form-control' type=text name=harga value=$r[harga]></td>
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
	  