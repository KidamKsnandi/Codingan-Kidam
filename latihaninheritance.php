<?php 

echo "<h2>Bangun Datar</h2>";
class bangunDatar {
    protected $luas, $keliling;
}
class persegi extends bangunDatar {
    function lpersegi($s) {
        echo "Menghitung Luas dan Keliling Persegi <br>";
        echo "Sisinya = $s <br>";
        $this->luas = $s * $s;
        $this->keliling = 4 * $s;
        echo "Luasnya = ". $this->luas ."<br>";
        echo "Kelilingnya = ". $this->keliling."<hr>";
    }

}
class persegiPanjang extends bangunDatar {
    function lpersegiPanjang($p,$l) {
        echo "Menghitung Luas dan Keliling Persegi Panjang<br>";
        echo "Panjangnya = $p <br>";
        echo "Lebarnya = $l <br>";
        $this->luas = $p * $l;
        $this->keliling = 2 * ($p + $l);
        echo "Luasnya = $this->luas <br>";
        echo "Kelilingnya = ". $this->keliling."<hr>";
    }
}
class segitiga extends bangunDatar {
    function lsegitiga($a, $t, $s) {
        echo "Menghitung Luas dan Keliling Segitiga <br>";
        echo "Alasnya = $a <br>";
        echo "Tingginya = $t <br>";
        echo "Panjang sisi = $s <br>";
        $this->luas = 1/2 * $a * $t;
        $this->keliling = 3 * $s;
        echo "Luasnya = $this->luas <br>";
        echo "Kelilingnya = $this->keliling <hr>";
    }
}  
class lingkaran extends bangunDatar {
    function llingkaran($r, $phi = 3.14) {
        echo "Menghitung Luas dan Keliling Lingkaran <br>";
        echo "Phi = $phi <br>";
        echo "Jari-jari = $r <br>";
        $this->luas = $phi * $r * $r;
        $this->keliling = 2 * $phi * $r;
        echo "Luasnya = $this->luas <br>";
        echo "Kelilingnya = $this->keliling <hr>";
    }   
} 


$bangunDatar = new persegi;
$bangunDatar->lpersegi(5);
$bangunDatar = new persegiPanjang;
$bangunDatar->lpersegiPanjang(10,5);
$bangunDatar = new segitiga;
$bangunDatar->lsegitiga(10,2,5);
$bangunDatar = new lingkaran;
$bangunDatar->llingkaran(10);


?>