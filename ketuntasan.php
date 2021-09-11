<?php

  $nilai = 20000;
  if ($nilai >= 75 && $nilai <= 100){
    echo "<h1>Lulus </h1>";
  } 
  else if ($nilai < 75 && $nilai >= 0) {
     echo "<h1>Tidak Lulus</h1>";
  } else {
      echo "<h1>Nilai Tidak Valid</h1>";
  }
 
?>