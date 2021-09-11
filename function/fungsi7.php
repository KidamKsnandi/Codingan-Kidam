<?php

/**
 * Fungsi ini untuk melakukan foreach pada setiap item pada array.
 * Lalu parameter ke-2 adalah fungsi anonim untuk menangani item array
 * tersebut mau diapakan
 */
function tampilkanArray (array $array, callable $fungsiEchoer) {
  foreach ($array as $key => $item) {
    # di sini kita tidak tahu fungsi anonim ini tugasnya seperti apa
    # karena ia tergantung fungsi yang dilemparkan sebagai parameter
    $fungsiEchoer($key, $item, count($array));
  }
}

# kita bikin satu variabel array berisi kumpulan nama mahasiswa
$listMahasiswa = ['Nurul Huda', 'Wahid Abdullah', 'Lendis Fabri'];

# kita panggil fungsi tampilkanArray()
# kita passing variabel $listMahasiswa untuk parameter 1, dan 
# fungsi anonim yang akan menangani setiap item dari array
# sebagai parameter 2
tampilkanArray($listMahasiswa, function ($key, $nama) {
  echo "{$key} - Bung {$nama} <br>";
});

# kita panggil lagi fungsi tampilkanArray dengan
# parameter fungsi anonim yang berbeda. 
tampilkanArray($listMahasiswa, function ($key, $nama, $panjangArray) {
  echo "{$nama}";

  if ($key < $panjangArray - 1) {
    echo " - ";
  }
});

echo "<br>";
?>