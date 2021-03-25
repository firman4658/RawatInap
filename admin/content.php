<?php
	if ($_GET['module']=='home'){
		echo"hai";
	}

	//bagian dokter
	elseif ($_GET['module']=='dokter') 
	{
		include "module/dokter/dokter.php";
	}
	elseif ($_GET['module']=='pasien') 
	{
		include "module/pasien/pasien.php";
	}

?>