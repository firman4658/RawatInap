<?php
$aksi = "module/pembayaran/aksi_pembayaran.php";

switch ($_GET['act']) {

	default:
		// Tampil Data - mengambil file adminshow.php
		echo "<a href='?module=pembayaran&act=tambahuser' class='nav-link text-black'><i class='fa fa-plus-circle fa-lg'></i> Tambah</a>
		<table cellpadding='40px' id='rawat' class='table table-striped jambo_table bulk_action table-bordered align-middle' cellspacing='0' width='120%'>
		 <thead align=center>
			<tr>
				<th>NO</th> <th>Nama Pasien</th> <th>Tgl Keluar</th> <th>Biaya Tindakan</th> <th>Jenis Asuransi</th> <th>Total Bayar</th>  <th>Pilihan</th> 
			</tr></thead>";
		$no = 0;

		$data = mysqli_query($konek, "SELECT * FROM pembayaran inner join diagnosa on diagnosa.id_diagnosa=pembayaran.id_diagnosa inner join pasien on pasien.id_pasien=diagnosa.id_pasien");
		while ($r = mysqli_fetch_array($data)) {
			$no++;
			echo "<tr align=center>
				<td>$no</td> <td>$r[nama_pasien]</td> <td>$r[tgl_keluar]</td> <td>$r[biaya_tindakan]</td> <td>$r[nama_asuransi]</td>   
				<td align='center'>
				<a href='?module=pembayaran&act=hitung&id=$r[id_pembayaran]'><input class='btn btn-success' type=submit name=hitung value='Hitung'></a>
                    <td>  
                    <a href='$aksi?module=pembayaran&act=hapus&id=$r[id_pembayaran]'> <i class='fa fa-trash-o fa-2x' aria-hidden='true'></i> </a>
               </td>
          </tr>";
		}
		echo "</table>";
		break;

		// Tambah Data - memanggil file pasienfm.php
	case "tambahuser":
		echo "<form action='$aksi?module=pembayaran&act=input' method='POST'>
			<table class='table table-striped table-bordered' >
			<tr>
			<td>Pasien</td> 
			<td><select name=id_diagnosa class='form-control'>
					<option value='null'>Silahkan Pilih Pasien </option>";
		$data = mysqli_query($konek, "SELECT * FROM diagnosa inner join pasien on pasien.id_pasien=diagnosa.id_pasien");
		while ($r = mysqli_fetch_array($data)) {
			echo "<option value='$r[id_diagnosa]'> $r[nama_pasien]</option>";
		}
		echo "</select>
							</td>
			</tr>
				<tr>
						<td>Tanggal Keluar</td> <td><input  class='form-control' type=date name=tgl_keluar></td>
				</tr>
				
				<tr>
						<td>Biaya Tindakan</td> <td><input  class='form-control' type=text name=biaya_tindakan></td>
				</tr>
				<tr>
				<td>Asuransi</td> 
				<td><select name=nama_asuransi class='form-control'>
						<option value='null'>Silahkan Pilih Asuransi </option>";
		$data = mysqli_query($konek, "SELECT * FROM asuransi");
		while ($r = mysqli_fetch_array($data)) {
			echo "<option value='$r[nama_asuransi]'> $r[nama_asuransi]</option>";
		}
		echo "</select>
								</td>
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

	case "hitung":
		$data = mysqli_query($konek, "SELECT * FROM pembayaran inner join diagnosa on pembayaran.id_diagnosa=diagnosa.id_diagnosa inner join asuransi on asuransi.nama_asuransi=pembayaran.nama_asuransi INNER JOIN pasien ON pasien.id_pasien=diagnosa.id_pasien inner join kamar on kamar.id_kamar=diagnosa.id_kamar where id_pembayaran='$_GET[id]'");
		while ($r = mysqli_fetch_assoc($data)) {


			$no++;
			$tgl1 = $r['tgl_daftar'];
			$tgl2 = $r['tgl_keluar'];

			$usia = new DateTime($tgl1);
			$sekarang = new DateTime($tgl2);
			$selisi = $sekarang->diff($usia);

			$pasien = $r['nama_pasien'];
			$biaya = ($r['harga']);
			$kamar = ($r['harga']  * 1000) * ($selisi->d);
			$tindakan = ($r['biaya_tindakan'] * 1000);
			$asuransi = ($r['potongan'] * 1000);
			$hasil = $kamar + $tindakan - $asuransi;

			echo "   <br>	
			<h2 align=center> RINCIAN PEMBAYARAN RUMAH SAKIT RAWAT INAP</h2>";
			echo " 
			<table cellpadding='40px' class='table table-striped jambo_table bulk_action table-bordered align-middle' cellspacing='0' >
			<thead align=center>
				 <th>Nama Pasien</th> <th>Biaya Tindakan</th><th>Tarif kamar/Hari </th><th>Lama Inap</th> <th>Biaya Kamar</th> <th>Potongan Asuransi</th> <th>Total Bayar</th> 
			</tr></thead>";
			echo "<tr align=center>
			<td>$pasien</td> <td>Rp.$tindakan</td> <td>$r[nama_kamar] | Rp.$biaya</td><td>$selisi->d Hari</td><td>Rp.$kamar</td> <td> $r[nama_asuransi] | Rp.$asuransi</td> <td>Rp.$hasil</td>
				 </tr> 
			</table>";
		}
		break;
}
