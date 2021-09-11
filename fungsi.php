<?php

//     function perkenalan ($nama, $umur) {
//     echo "Perkenalkan, nama saya {$nama} <br>";
//     echo "Umur saya {$umur} Tahun <br><br>";

//   if ($umur >= 17) {
//     echo "Anda Sudah memliki KTP karena anda sudah berumur {$umur} Tahun";
//   } else {
//     echo "Anda Belum memliki KTP karena anda masih berumur {$umur} Tahun";
//   }
// }

//   perkenalan("Kidam Kusnandi", 17);

    // function Perhitungan($angka1, $angka2) {

    //   $tambah = $angka1 + $angka2;
    //   $kurang = $angka1 - $angka2;
    //   $kali = $angka1 * $angka2;
    //   $bagi = $angka1 / $angka2;
      
    //   echo "Hasil Penjumlahan : ".$tambah."<br>";
    //   echo "Hasil Pengurangan :  ".$kurang."<br>";
    //   echo "Hasil Perkalian : ".$kali."<br>";
    //   echo "Hasil Pembagian : ".$bagi."<br>";
      
    // }
    // Perhitungan(10,5);

    // function LuasPersegi($sisi) {
    //   $luas = $sisi * $sisi;
    //   return $luas;
    // }
    // // pemanggiilan
    // echo "Luasnya : " .LuasPersegi(5)

    // PARAMETER DEFAULT
    function nama($usia, $nama="Kidam Kusnandi") {
      echo "Nama : ".$nama."<br>";
      echo "Umur : ".$usia." Tahun<br>";
    }
    nama(17);

?>