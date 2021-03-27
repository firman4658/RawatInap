<?php
$aksi="module/admin/aksi_diagnosa.php";

	switch($_GET[act])
	{

	default:
		// Tampil Data - mengambil file adminshow.php
		echo"<a href='?module=diagnosa&act=tambahuser' class='nav-link text-black'><i class='fa fa-plus-circle' ></i> Tambah</a>
		 <table id='rawat' class='table table-striped table-bordered 'cellspacing='0' width='150%'>
		 <thead>
			<tr>
				<th>NO</th> <th>Nama Pasien</th> <th>Diagnosa</th> <th>Penyakit</th> <th>Tindakan</th> <th>Kamar</th> <th>Aksi</th>
			</tr></thead>";
			$no=0;
			
			$data = mysqli_query($konek,"SELECT * FROM diagnosa inner join pasien on diagnosa.id_pasien=pasien.id_pasien inner join kamar on kamar.id_kamar=diagnosa.id_diagnosa");	
			while($r = mysqli_fetch_array($data))
			{
				$no++;
		echo"<tr>
				<td>$no</td> <td>$r[nama_pasien]</td> <td>$r[diagnosa]</td> <td>$r[penyakit]</td> <td>$r[tindakan]</td> <td>$r[kamar]</td>
				<td> 
					<a href='?module=diagnosa&act=edituser&id=$r[id_diagnosa]'> <img src='edit.png' width=20px> </a> | 
					<a href='$aksi?module=diagnosa&act=hapus&id=$r[id_diagnosa]'> <img src='hapus.png' width=20px> </a>
				</td>
			</tr>";
			}
		echo"</table>";
	break;

	// Tambah Data - memanggil file diagnosafm.php
	case "tambahuser":
		echo"<form action='$aksi?module=diagnosa&act=input' method='POST'>
			<table class='table table-striped table-bordered'>
            <tr>
			<td>Nama Pasien</td> 
			<td><select name=id_pasien class='form-control'>
					<option value='null'>Silahkan Pilih Pasien </option>";
					$data = mysqli_query($konek,"SELECT * FROM pasien");
					while($r = mysqli_fetch_array($data)){
					echo"<option value='$r[id_pasien]'> $r[nm_pasien]</option>";
					}
				echo "</select>
			</td>
			</tr>
                <tr>
					<td>Diagnosa</td> <td><input  class='form-control' type=text name=diagnosa></td>
				</tr>
				<tr>
					<td>Penyakit</td> <td><input  class='form-control' type=text name=penyakit></td>
				</tr>
                <tr>
                    <td>Tindakan</td> <td><input  class='form-control' type=text name=tindakan></td>
                 </tr>
                 <tr>
                <td>Nama kamar</td> 
                <td><select name=id_kamar class='form-control'>
                        <option value='null'>Silahkan Pilih kamar </option>";
                        $data = mysqli_query($konek,"SELECT * FROM kamar");
                        while($r = mysqli_fetch_array($data)){
                        echo"<option value='$r[id_kamar]'> $r[nm_kamar]</option>";
                        }
                    echo "</select>
                </td>
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
					<tdID Diagnosa</td> 
					<td>
						<input type=text name=id_diagnosa value='$r[id_diagnosa]' disabled>
						<input type=hidden name='idh' value='$r[id_diagnosa]'>
					</td>
				</tr>
                <tr>
                <td>Nama Pasien</td> 
                <td><select name=id_pasien class='form-control'>
                        <option value='null'>Silahkan Pilih Pasien </option>";
                        $data = mysqli_query($konek,"SELECT * FROM pasien");
                        while($r = mysqli_fetch_array($data)){
                        echo"<option value='$r[id_pasien]'> $r[nm_pasien]</option>";
                        }
                    echo "</select>
                </td>
                </tr>
                <tr>
                <td>Diagnosa</td> <td><input  class='form-control' type=text name=diagnosa></td>
                </tr>
                <tr>
                    <td>Penyakit</td> <td><input  class='form-control' type=text name=penyakit></td>
                </tr>
                <tr>
                    <td>Tindakan</td> <td><input  class='form-control' type=text name=tindakan></td>
                </tr>
                <tr>
                <td>Nama kamar</td> 
                <td><select name=id_kamar class='form-control'>
                        <option value='null'>Silahkan Pilih kamar </option>";
                        $data = mysqli_query($konek,"SELECT * FROM kamar");
                        while($r = mysqli_fetch_array($data)){
                        echo"<option value='$r[id_kamar]'> $r[nm_kamar]</option>";
                        }
                    echo "</select>
                </td>
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
	  