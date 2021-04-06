<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['passuser'])) {
	header("location:../../index.php");
} else {

	include "../../../config/koneksi.php";
	$module = $_GET['module'];
	$act = $_GET['act'];

	//hapus memanggil file provinsidel.php
	if ($module == 'pembayaran' and $act == 'hapus') {
		mysqli_query($konek, "delete FROM pembayaran where id_pembayaran='$_GET[id]'");
		header('location:../../home.php?module=' . $module);
	}

	//input memanggil file provinsisim.php
	elseif ($module == 'pembayaran' and $act == 'input') {
		mysqli_query($konek, "INSERT INTO pembayaran values ('$_POST[id_pembayaran]','$_POST[id_diagnosa]','$_POST[tgl_keluar]','$_POST[biaya_tindakan]','$_POST[nama_asuransi]')");
		header('location:../../home.php?module=' . $module);
	}

	//update memanggil file provinsieditsim.php
	elseif ($module == 'pembayaran' and $act == 'update') {
		mysqli_query($konek, "UPDATE pembayaran set id_pasien='$_POST[id_pasien]',diagnosa='$_POST[diagnosa]',penyakit='$_POST[penyakit]',tindakan='$_POST[tindakan]',id_kamar='$_POST[id_kamar]'
		where id_diagnosa='$_POST[idh]'");
		header('location:../../home.php?module=' . $module);
	}
}
