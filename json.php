<?php

// $mahasiswa = [
//   'nama' => 'Kidam Kusnandi',
//   'domisili' => 'Bandung'
// ]

// $nilaiUjian = [70, 80, 50, 90];

// // di konversikan ke json
// echo json_encode($nilaiUjian);
// echo json_encode($mahasiswa);

$listMahasiswaJSON = '[
  { "nama": "Nurul Huda" },
  { "nama": "Renza Ilhami Risqi" },
  { "nama": "Taufan Aji" },
  { "nama": "Rahmad Dwi Oktanto" }
]';
  
  // di konversikan ke array
$list = json_decode($listMahasiswaJSON);

  // tampilkan datanya
  foreach ($list as $key => $mahasiswa) {
    echo "Nama ke - {$key} : {$mahasiswa->nama} <br>";
  }
?>