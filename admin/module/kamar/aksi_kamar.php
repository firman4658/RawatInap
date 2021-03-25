<?php
session_start();
if (empty($_SESSION['username']) AND empty ($_SESSION['password'])) {
	header("location:../../index.php");
}

else{

	include "../../../config/koneksi.php";
	$module=$_GET[module];
	$act=$_GET[act];

	//hapus memanggil file pasiendel.php
	if ($module=='pasien' AND $act=='hapus'){
		mysqli_query($konek,"delete from pasien where username='$_GET[id]'");
		header('location:../../home.php?module='.$module);
	}

	//input memanggil file pasiensim.php
	elseif ($module=='pasien' AND $act=='input') {
		mysqli_query($konek,"INSERT INTO pasien values ('$_POST[nama_lengkap]','$_POST[alamat]','$_POST[umur]')");
		header('location:../../home.php?module='.$module);
	}

	//update memanggil file pasieneditsim.php
	elseif ($module=='pasien' AND $act=='update') {
		mysqli_query($konek,"UPDATE pasien set alamat='$_POST[alamat]',umur='$_POST[umur]'
		where nama_lengkap='$_POST[idh]'");
		header('location:../../home.php?module='.$module);
	}
 }
?>