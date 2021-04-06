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
	if ($module=='pembayaran' AND $act=='hapus'){
		mysqli_query($konek,"delete from pembayaran where id_pembayaran='$_GET[id]'");
		header('location:../../home.php?module='.$module);
	}

	//input memanggil file pasiensim.php
	elseif ($module=='pembayaran' AND $act=='input') {
		mysqli_query($konek,"INSERT INTO pembayaran values ('$_POST[id_diagnosa]','$_POST[tgl_keluar]','$_POST[biaya_tindakan]','$_POST[nama_asuransi]')");
		header('location:../../home.php?module='.$module);
	}
 }
