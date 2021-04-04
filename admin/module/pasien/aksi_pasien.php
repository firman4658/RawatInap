<?php
session_start();
if (empty($_SESSION['username']) AND empty ($_SESSION['password'])) {
	header("location:../../index.php");
}

else{

	include "../../../config/koneksi.php";
	$module=$_GET['module'];
	$act=$_GET['act'];

	//hapus memanggil file pasiendel.php
	if ($module=='pasien' AND $act=='hapus'){
		mysqli_query($konek,"delete from pasien where id_pasien='$_GET[id]'");
		header('location:../../home.php?module='.$module);
	}

	//input memanggil file pasiensim.php
	elseif ($module=='pasien' AND $act=='input') {
		mysqli_query($konek,"INSERT INTO pasien values ('$_POST[id_pasien]','$_POST[nama_pasien]','$_POST[alamat]','$_POST[umur]','$_POST[jenis_kelamin]','$_POST[pekerjaan]','$_POST[status]','$_POST[agama]','$_POST[tlpn]','$_POST[ttlahir]','$_POST[tgl_daftar]','$_POST[no_rekam]')");
		header('location:../../home.php?module='.$module);
	}

	//update memanggil file pasieneditsim.php
	elseif ($module=='pasien' AND $act=='update') {
		mysqli_query($konek,"UPDATE pasien set nama_pasien='$_POST[nama_pasien]',alamat='$_POST[alamat]',umur='$_POST[umur]'jenis_kelamin='$_POST[jenis_kelamin]',pekerjaan='$_POST[pekerjaan]',status='$_POST[status]',agama='$_POST[agama]',tlpn='$_POST[tlpn]',ttlahir='$_POST[ttlahir]',tgl_daftar='$_POST[tgl_daftar]',no_rekam='$_POST[no_rekam]'
		whee id_pasien='$_POST[idh]'");
		header('location:../../home.php?module='.$module);
	}
 }
