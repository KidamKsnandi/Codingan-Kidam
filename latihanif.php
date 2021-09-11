<?php

  $nilai = 80;
  if ($nilai >= 90 && $nilai <= 100){
    echo "<h1> Grade A </h1>";
  } 
  else if ($nilai >= 80 && $nilai <=89) {
     echo "<h1> Grade B </h1>";
  }
  else if ($nilai >= 70 && $nilai <=79) {
    echo "<h1> Grade C</h1>";
 }
 else if ($nilai >= 60 && $nilai <=69) {
    echo "<h1> Grade D</h1>";
 } 
 else if ($nilai < 60 && $nilai >= 0) {
    echo "<h1> Grade E</h1>";
 }
 else {
      echo "<h1>Nilai Kacau !</h1>";
  }
 
?>