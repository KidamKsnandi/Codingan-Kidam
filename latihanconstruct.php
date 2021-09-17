<?php 

class biodata {
    function __construct($nama,$jk,$kelas) {
        echo "Nama Saya : $nama </br>";
        echo "Jenis Kelamin : $jk </br>";
        echo "Kelas : $kelas <hr>";
    }
}

$biodata = new biodata("Kidam Kusnandi", "Laki-Laki", "XII RPL 2") ;
$biodata = new biodata("Bagas", "Laki-Laki", "XII RPL 1") ;
$biodata = new biodata("Dinda", "Perempuan", "XII RPL 3") ;


?>