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

?>