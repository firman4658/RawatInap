<?php
	if ($_GET['module']=='home'){
		echo"hai";
	}

	//bagian dokter
	elseif ($_GET['module']=='admin') 
	{
		include "module/admin/admin.php";
	}
	elseif ($_GET['module']=='dokter') 
	{
		include "module/dokter/dokter.php";
	}
	elseif ($_GET['module']=='dokter1') 
	{
		include "module/dokter1/dokter1.php";
	}
	elseif ($_GET['module']=='pasien') 
	{
		include "module/pasien/pasien.php";
	}
	elseif ($_GET['module']=='kamar') 
	{
		include "module/kamar/kamar.php";
	}
	elseif ($_GET['module']=='diagnosa') 
	{
		include "module/diagnosa/diagnosa.php";
	}
	elseif ($_GET['module']=='pembayaran') 
	{
		include "module/pembayaran/pembayaran.php";
	}
	elseif ($_GET['module']=='total') 
	{
		include "module/total/total.php";
	}


?>