<?php
   if(isset($_POST['simpan'])) {
   $nama = $_POST['nama'];
   $tl = $_POST['tl'];
   $ttl = $_POST['ttl'];
   $jk = $_POST['jk'];
   $alamat = $_POST['alamat'];
   $agama = $_POST['agama'];
   $pt = $_POST['pt'];
   $status = $_POST['status'];
   $hobi = $_POST['hobi'];
   $citacita = $_POST['citacita'];
   $kkt = $_POST['kkb'];
      echo "====== Biodata Diri ====== <br>";
      echo "====================== <br>";
      echo "Nama : <b>$nama</b> <br>";
      echo "Tempat Lahir : <b>$tl</b> <br>";
      echo "Tanggal Lahir : <b>$ttl</b> <br>";
      echo "Jenis Kelamin : <b>$jk</b> <br>";
      echo "Agama : <b>$agama</b> <br>";
      echo "Pendidikan Terakhir : <b>$pt</b> <br>";
      echo "Status : <b>$status</b> <br>";
      if(isset($_POST['hobi'])) {
         echo "Hobi : ";
      for ($i = 0; $i < count($hobi); $i++)  {
         echo "( <b>" . $hobi[$i] . "</b> ) " ;
      }
      echo "<br>";
      }
      echo "Cita cita : <b>$citacita</b> <br>";
      echo "Kata-Kata Bijak : <b>$kkt</b>";
   }
?>