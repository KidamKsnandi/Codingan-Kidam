<?php 

class bangunDatar {
    function persegi($s) {
        echo "Menghitung Luas Persegi <br>";
        echo "Sisinya = $s <br>";
        $luas = $s * $s;
        echo "Luasnya = $luas <hr>";
    }

    function segitiga($a, $t) {
        echo "Menghitung Luas Segitiga <br>";
        echo "Alasnya = $a <br>";
        echo "Tingginya = $t <br>";
        $luas = 1/2 * $a * $t;
        echo "Luasnya = $luas <hr>";
    }
    
    function lingkaran($r, $phi = 3.14) {
        echo "Menghitung Luas Lingkaran <br>";
        echo "Phi = $phi <br>";
        echo "Jari-jari = $r <br>";
        $luas = $phi * $r * $r;
        echo "Luasnya = $luas <hr>";
    }    
}

$bangunDatar = new bangunDatar;

$bangunDatar->persegi(10);
$bangunDatar->segitiga(10,5);
$bangunDatar->lingkaran(10);

?>