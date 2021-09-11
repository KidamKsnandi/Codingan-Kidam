<?php
 // File json yang akan di baca 
 $file = "latihan.json";

 // Mendapatkan file json
 $anggota = file_get_contents($file);

 // Mendecode anggota.json
 $data = json_decode($anggota, true);

  foreach ($data as $d) {
      echo "Nama : " . $d['nama']."<br>";
      echo "Domisili : " . $d['domisili']."<br>";
      echo "Hobi : <ul>";
      foreach ($d['hobi'] as $d2) {
        echo "<li>$d2</li>";
      }
    }

?>