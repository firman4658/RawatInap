<!DOCTYPE html>
<html lang="en">

<body>

     <?php
     include '../config/koneksi.php';
     $data = mysqli_query($konek, "SELECT * FROM pembayaran where id_pasien='$id_pasien' inner join diagnosa on pembayaran.id_diagnosa=diagnosa.id_diagnosa inner join asuransi on asuransi.nama_asuransi=pembayaran.nama_asuransi INNER JOIN pasien ON pasien.id_pasien=diagnosa.id_pasien inner join kamar on kamar.id_kamar=diagnosa.id_kamar");
     while ($r = mysqli_fetch_array($data))
     $no++;
     $kamar = $r['harga'];
     $tindakan = $r['biaya_tindakan'];
     $asuransi = $r['potongan'];
     $hasil = $kamar + $tindakan - $asuransi;
     
     echo " 
  <p></p>
  <tr>
	<td>Jadi Total Yang di Bayar Pasien Adalah = $hasil</td> 
  </tr>
 ";
     ?>


</body>

</html>