<!DOCTYPE html>
<html lang="en">

<body>

  <?php
  include '../config/koneksi.php';
  $id_pembayaran = $_GET['id_pembayaran'];
  $data = mysqli_query($konek, "SELECT * FROM pembayaran inner join diagnosa on pembayaran.id_diagnosa=diagnosa.id_diagnosa inner join asuransi on asuransi.nama_asuransi=pembayaran.nama_asuransi INNER JOIN pasien ON pasien.id_pasien=diagnosa.id_pasien inner join kamar on kamar.id_kamar=diagnosa.id_kamar WHERE id_pembayaran = '$id_pembayaran'");
  while ($r = mysqli_fetch_assoc($data)) {


    $no++;
    $kamar = $r['harga'];
    $tindakan = $r['biaya_tindakan'];
    $asuransi = $r['potongan'];
    $pasien = $r['nama_pasien'];


    $hasil = $kamar + $tindakan - $asuransi;
  }
  echo " 
  <p></p>
  <tr>
  Nama pasien     = $pasien <br>
  Biaya tindakan  = Rp.$tindakan <br>

  Biaya Kamar     = Rp.$kamar <br>
  Potongan dari asuransi = Rp.$asuransi <br>
	<td>Jadi Total Yang di Bayar Pasien Adalah = Rp $hasil.000</td> 
  </tr>
 ";
  ?>


</body>

</html>