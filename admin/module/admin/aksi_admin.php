<?php
session_start();
if (empty($_SESSION['username']) AND empty ($_SESSION['password'])) {
	header("location:../../index.php");
}

else{

	include "../../../config/koneksi.php";
	$module=$_GET['module'];
	$act=$_GET['act'];

	//hapus memanggil file admindel.php
	if ($module=='admin' AND $act=='hapus'){
		echo '<script language="javascript" type="text/javascript">
		alert("data berhasil di hapus!");</script>';
		echo "<meta http-equiv='refresh' content='2; url=index.php'>";
		mysqli_query($konek,"delete from admin where username='$_GET[id]'");
		header('location:../../home.php?module='.$module);
	}

	//input memanggil file adminsim.php
	elseif ($module=='admin' AND $act=='input') {
		mysqli_query($konek,"INSERT INTO admin values ('$_POST[username]','$_POST[nm_lengkap]','$_POST[password]','$_POST[foto]')");
		header('location:../../home.php?module='.$module);
	}

	//update memanggil file admineditsim.php
	elseif ($module=='admin' AND $act=='update') {
		mysqli_query($konek,"UPDATE admin set nm_lengkap='$_POST[nm_lengkap]',password='$_POST[password]',foto='$_POST[foto]'
		where username='$_POST[idh]'");
		header('location:../../home.php?module='.$module);
	}
 }
