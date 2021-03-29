<?php
session_start();
if (empty($_SESSION['username']) AND empty ($_SESSION['passuser'])) {
	header("location:../../index.php");
}

else{

	include "../../../config/koneksi.php";
	$module=$_GET[module];
	$act=$_GET['act'];

	//hapus memanggil file provinsidel.php
	if ($module=='diagnosa' AND $act=='hapus'){
		mysqli_query($konek,"delete from diagnosa where id_diagnosa='$_GET[id]'");
		header('location:../../home.php?module='.$module);
	}

	//input memanggil file provinsisim.php
	elseif ($module=='diagnosa' AND $act=='input') {
		mysqli_query($konek,"INSERT INTO diagnosa values ('$_POST[id_diagnosa]','$_POST[nama_pasien]','$_POST[diagnosa]','$_POST[penyakit]','$_POST[tindakan]','$_POST[nama_kamar]')");
		header('location:../../home.php?module='.$module);
	}

	//update memanggil file provinsieditsim.php
	elseif ($module=='diagnosa' AND $act=='update') {
		mysqli_query($konek,"UPDATE diagnosa set id_pasien='$_POST[id_pasien]',diagnosa='$_POST[diagnosa]',penyakit='$_POST[penyakit]',tindakan='$_POST[tindakan]',id_kamar='$_POST[id_kamar]'
		where id_diagnosa='$_POST[idh]'");
		header('location:../../home.php?module='.$module);
	}
 }
?>