<?php 

function lingkaran($r, $phi = 3.14) {
    $luas = $phi * $r * $r;
 return $luas;
}

function segitiga($a, $t) {
    $luas = 1/2 * $a * $t;
 return $luas;
}

function persegiPanjang($p, $l) {
    $luas = $p * $l;
 return $luas;
}

echo "<table>";
echo "<tr>";
echo "<td>Luas Lingkaran</td> <td>:</td> <td>". lingkaran(10). "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Luas Segitiga</td> <td>:</td> <td>". segitiga(10, 2). "</td";
echo "</tr>";

echo "<tr>";
echo "<td>Luas Persegi Panjang </td> <td>:</td> <td>". persegiPanjang(3, 6). "</td>";
echo "</tr>";
echo "</table>";

?>