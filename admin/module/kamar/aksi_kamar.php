<?php
session_start();
if (empty($_SESSION['username']) AND empty ($_SESSION['password'])) {
	header("location:../../index.php");
}

else{

	include "../../../config/koneksi.php";
	$module=$_GET[module];
	$act=$_GET[act];

	//hapus memanggil file kamardel.php
	if ($module=='kamar' AND $act=='hapus'){
		mysqli_query($konek,"delete from kamar where id_kamar='$_GET[id]'");
		header('location:../../home.php?module='.$module);
	}

	//input memanggil file kamarsim.php
	elseif ($module=='kamar' AND $act=='input') {
		mysqli_query($konek,"INSERT INTO kamar values ('$_POST[id_kamar]','$_POST[nama_kamar]','$_POST[tipe_kamar]','$_POST[harga]')");
		header('location:../../home.php?module='.$module);
	}

	//update memanggil file kamareditsim.php
	elseif ($module=='kamar' AND $act=='update') {
		mysqli_query($konek,"UPDATE kamar set tipe_kamar='$_POST[tipe_kamar]',harga='$_POST[harga]'
		where nama_kamar='$_POST[idh]'");
		header('location:../../home.php?module='.$module);
	}
 }
?>