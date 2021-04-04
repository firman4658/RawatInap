<!DOCTYPE html>
<html lang="en">

<body>

     <?php
     include '../config/koneksi.php';
     $no++;
     $kamar = $r['harga'];
     $tindakan = $r['biaya_tindakan'];
     $asuransi = $r['potongan'];
     $hasil = $kamar + $tindakan - $asuransi;

     echo "<tr>
          <td>Nama Pasien</td> 
          <td> <select name=id_pasien class='form-control'>
               <option value='null'>Silahkan Pilih Pasien </option>";
     $data = mysqli_query($konek, "SELECT * FROM pembayaran inner join diagnosa on pembayaran.id_diagnosa=diagnosa.id_diagnosa inner join asuransi on asuransi.nama_asuransi=pembayaran.nama_asuransi INNER JOIN pasien ON pasien.id_pasien=diagnosa.id_pasien inner join kamar on kamar.id_kamar=diagnosa.id_kamar");
     while ($r = mysqli_fetch_array($data)) {
          echo "<option value='$r[id_pasien]'> $r[nama_pasien]</option>";

          echo "</select>
          </td>
      </tr>
      <tr>
          <td>diagnosa</td> 
          <td> <select name=id_diagnosa class='form-control'>
               <option value='null'>Silahkan Pilih diagnosa </option>";
          echo "<option value='$r[id_diagnosa]'> $r[diagnosa]</option>";

          echo "</select>
          </td>
      </tr>
      <tr>
          <td>penyakit</td> 
          <td> <select name=id_diagnosa class='form-control'>
               <option value='null'>Silahkan Pilih Penyakit </option>";
          echo "<option value='$r[id_diagnosa]'> $r[penyakit]</option>";

          echo "</select>
          </td>
      </tr>
      <tr>
          <td>Tindakan</td> 
          <td> <select name=id_diagnosa class='form-control'>
               <option value='null'>Silahkan Pilih Tindakan </option>";

          echo "<option value='$r[id_diagnosa]'> $r[tindakan]</option>";

          echo "</select>
          </td>
      </tr>
      <tr>
          <td>Kamar Pasien</td> 
          <td> <select name=id_kamar class='form-control'>
               <option value='null'>Silahkan Pilih Kamar </option>";

          echo "<option value='$r[id_kamar]'> $r[nama_kamar]</option>";

          echo "</select>
          </td>
      </tr>
      <tr>
               <td>Biaya Tindakan</td> 
               <td> <select name=id_pembayaran class='form-control'>
                    <option value='null'>Silahkan Pilih pembayaran </option>";

          echo "<option value='$r[id_pembayaran]'> $r[biaya_tindakan]</option>";

          echo "</select>
               </td>
          </tr>
      </tr>
      <tr>
      <td>Jenis Pembayaran</td> 
      <td> <select name=nama_asuransi class='form-control'>
           <option value='null'>Silahkan Pilih Jenis </option>";

          echo "<option value='$r[nama_asuransi]'> $r[nama_asuransi]</option>";
     }
     echo "</select>
      </td>
  </tr>
  <tr>
	<td>*Mendapatkan potongan Sesuai Pemilihan Asuransi</td> 
  </tr>
  <tr>
  <p></p>
	<td></td> 
		<td>
			<input type=submit class='btn btn-success' name=simpan value='Hitung'>
			<input type=reset class='btn btn-danger' name=batal value='Batal'>
		</td>
  </tr>
  </tr>
  <p></p>
  <tr>
	<td>Jadi Total Yang di Bayar Pasien Adalah = </td> 
  </tr>
 ";
     ?>


</body>

</html>