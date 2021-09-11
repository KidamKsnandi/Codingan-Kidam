<?php
//makanan
$mg =10000;
$ng =15000;
$ag =20000;
//minuman
$am =8000;
$j =10000;
$k =12000;

$jp = "Makanan";
$np = "Ayam Goreng";
$jumlah = 3;
$diskon = 0.2;

if ( $jp == "Makanan") {
   echo "+++ Restoran Colak Colek ++ <br>";
   echo "=========================== <br>";
   echo "Jenis Pesanan : $jp <br>";
   echo "Nama Pesanan  : $np <br>";
   echo "Jumlah        : $jumlah <br>";
   if ($np == "Mie Goreng")
   {
       $total = $mg * $jumlah;
          echo "Total         : $total <br>";
          if ($total >= 50000) {
            $diskon1 = $total * $diskon;
              echo "Diskon 20%       : $diskon1 <br>";
              $tb = $total - $diskon1;
              echo "Total bayar : $tb <br>";
            }
        } 
            else if ($np == "Nasi Goreng")
            {
       $total = $ng * $jumlah;
          echo "Total         : $total <br>";
          if ($total >= 50000) {
            $diskon1 = $total * $diskon;
              echo "Diskon 20%       : $diskon1 <br>";
              $tb = $total - $diskon1;
              echo "Total bayar : $tb <br>";
            }
            }      
            else if ($np == "Ayam Goreng")
            {
       $total = $ag * $jumlah;
          echo "Total         : $total <br>";
          if ($total >= 50000) {
            $diskon1 = $total * $diskon;
              echo "Diskon 20%       : $diskon1 <br>";
              $tb = $total - $diskon1;
              echo "Total bayar : $tb <br>";
            }
        } 
          else {
              echo "Tidak ada di menu Ngab";
            }

        } 

   else if ( $jp == "Minuman") 
   {
    echo "+++ Restoran Colak Colek ++ <br>";
    echo "=========================== <br>";
    echo "Jenis Pesanan : $jp <br>";
    echo "Nama Pesanan  : $np <br>";

    if ($np == "Air Mineral")
    {
$total = $am * $jumlah;
  echo "Total         : $total <br>";
  if ($total >= 50000) {
    $diskon1 = $total * $diskon;
      echo "Diskon 20%       : $diskon1 <br>";
      $tb = $total - $diskon1;
      echo "Total bayar : $tb <br>";
    }
    } 
    else if ($np == "Jus")
    {
$total = $j * $jumlah;
  echo "Total         : $total <br>";
  if ($total >= 50000) {
    $diskon1 = $total * $diskon;
      echo "Diskon 20%       : $diskon1 <br>";
      $tb = $total - $diskon1;
      echo "Total bayar : $tb <br>";
    }
    }      
    else if ($np == "Kopi")
    {
$total = $k * $jumlah;
  echo "Total         : $total <br>";
  if ($total >= 50000) {
    $diskon1 = $total * $diskon;
      echo "Diskon 20%       : $diskon1 <br>";
      $tb = $total - $diskon1;
      echo "Total bayar : $tb <br>";
    }
    } 
    else {
        echo "Tidak ada di menu Ngab <br>";
    }
  } else {
      echo "Jenis pesanan nya apa Ngab <br>";
  }
  echo "=========================== <br>";
  echo "======== Terima Kasih ======== <br>";
?>