<?php 
  $data = [
    [
      'nama' => 'Kidam',
      'buah' => [
        ['jenis' => 'Mangga', 'warna' => 'hijau'],
        ['jenis' => 'Apel', 'warna' => 'merah'],
        ['jenis' => 'Pear', 'warna' => 'kuning']
      ]
   
    ]
    ];

    foreach ($data as $data2) {
      echo "Nama Pemilik : " . $data2['nama']."<br>";
      echo "Buah Kesukaan :";
    echo "<ul>";
    foreach ($data2['buah'] as $data3) {
        echo "<li>" . $data3['jenis'] . " => " . $data3['warna'] ."</li>";
    }
    echo "</ul>";
    }
?>