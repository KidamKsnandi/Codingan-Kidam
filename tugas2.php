<?php
 $uang  = 100000;
 $minum = 15000;
 $sosis = 25000;

  echo "<h1>Hallo Ngab</h1><hr></hr>";

  echo "Uang Ucup = <b>$uang</b><br>";
  echo "<hr>";
 $sisa1 = $uang - $minum;
  echo "Jajan minum = <b>$minum</b><br>";
  echo "Sisa uang Ucup jajan minum = <b>$sisa1</b><br>";
  echo "<hr>";
  $sisa2 = $sisa1 - $sosis;
  echo "Jajan sosis bakar = <b>$sosis</b><br>";
  echo "Sisa uang Ucup jajan sosis bakar + minum = <b>$sisa2</b><br>";
  echo "<hr>";
  $sedekah = "0.1";
  $sisa3 = $sedekah * $sisa2;
  $sisa4 = $sisa2 - $sisa3; 
  echo "Sedekah ke musafir 10% dari <b>$sisa2</b> yaitu sebesar <b>$sisa3</b><br>";
  echo "Sisa uang Ucup = <b>$sisa4</b><br>";
  echo "<hr>";
  $nemu = "0.5";
  $sisa5 = $nemu * $sisa4;
  echo "Nemu uang dijalan sebesar 50% dari sisa uang ucup <b>$sisa4</b> yaitu sebesar <b>$sisa5</b><br>";
  echo "Sisa uang Ucup sekarang = <b>$sisa5</b> + <b>$sisa4</b><br>";
  echo "<hr>";
  $sisa6 = $sisa5 + $sisa4;
  echo "Sisa uang Ucup adalah <b>Rp.$sisa6</b>";
    
?>