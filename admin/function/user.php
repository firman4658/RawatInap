<?php
include '../admin/home.php';
include '../config/koneksi.php';
        $query = mysqli_query($konek, "SELECT * FROM dokter WHERE username = '".$id."'");
        $data = mysqli_fetch_array($query);
?>