<?php
session_start();
if (empty($_SESSION['username']) AND empty ($_SESSION['password'])) {
	header("location:../../index.php");
}

else{

	include "../../../config/koneksi.php";
	$module=$_GET[module];
	$act=$_GET[act];

	//hapus memanggil file dokterdel.php
	if ($module=='dokter' AND $act=='hapus'){
		mysqli_query($konek,"delete from dokter where username='$_GET[id]'");
		header('location:../../home.php?module='.$module);
	}

	//input memanggil file adminsim.php
	elseif ($module=='dokter' AND $act=='input') {
		mysqli_query($konek,"INSERT INTO dokter values ('$_POST[username]','$_POST[nama_lengkap]','$_POST[alamat]','$_POST[password]','$_POST[foto]','$_POST[spesialis]','$_POST[kontak]')");
		header('location:../home.php?module='.$module);
	}

	//update memanggil file admineditsim.php
	elseif ($module=='dokter' AND $act=='update') {
		mysqli_query($konek,"UPDATE dokter set nama_lengkap='$_POST[nama_lengkap]',alamat='$_POST[alamat]',password='$_POST[password]',foto='$_POST[foto]',spesialis='$_POST[spesialis]',kontak='$_POST[kontak]'
		where username='$_POST[idh]'");
		header('location:../home.php?module='.$module);
	}
 }
?>	