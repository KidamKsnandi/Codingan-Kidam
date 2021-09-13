<?php 
//     // Class
// class laptop {

//     // Property /atribut
//     var $pemilik;
//     var $merk;
//     var $ukuran_layar;

//     // Method/function
//     function hidupkan_laptop() {
//         return "Laptop hidup";
//     }

//     function matikan_laptop() {
//         return "Laptop mati";
//     }
// }
//     // Object
//     // Proses instansiasi
// $laptop_kidam = new laptop;
//     // Set/Mengisi Property
// $laptop_kidam->merk="ASUS";

// echo $laptop_kidam->merk;

class tas {
    var $pemilik;
    var $warna;
    var $merk;
    var $jenis;
    function buka_tas($perintah) {
        return $perintah;
    }
    function masukkan_barang($perintah) {
        return $perintah;
    }
    function tutup_tas($perintah) {
        return $perintah;
    }
}

$tas = new tas;

$tas->warna="hitam";
$tas->merk="alto";
$tas->jenis="gendong";
$tas->pemilik="Kidam Kusnandi";

echo "Tas milik $tas->pemilik berwarna $tas->warna <br>";
echo "Merknya $tas->merk <br>";
echo "Jenisnya tas $tas->jenis <br><br>";
echo $tas->buka_tas("Tas Di Buka !!!") ."<br>";
echo $tas->masukkan_barang("Memasukkan barang")." ke tas <br>";
echo $tas->tutup_tas("Tas di Tutup !!!");

?>