<!DOCTYPE html>
<html lang="en">
<body>
     
     <?php
      include '../config/koneksi.php';
      $data = mysqli_query($konek, "SELECT * FROM pembayaran inner join diagnosa on pembayaran.id_diagnosa=diagnosa.id_diagnosa inner join asuransi on asuransi.nama_asuransi=pembayaran.nama_asuransi");
      while ($r = mysqli_fetch_array($data));
      $no++;
      $kamar = $r['harga'];
      $tindakan = $r['biaya_tindakan'];
      $asuransi = $r['potongan'];
      $hasil = $kamar+$tindakan-$asuransi;

      echo"$hasil";

     ?>
    

</body>
</html>