<?php
 // File json yang akan di baca 
 $file = "movie2.json";

 // Mendapatkan file json
 $anggota = file_get_contents($file);

 // Mendecode anggota.json
 $data = json_decode($anggota, true);

 echo "<center>";
 echo "Data Film <br>";
 echo "<b>The Graduate</b> <br>";
 ?>
 <img src="img\spiderman.jpg"> <br>
 <?php
foreach ($data as $d) {
echo "</center>"; 
echo "<table>";
echo "<tr>";
echo "<td></td>";
echo "<td>".$d['Plot']."<br></td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Tahun Rilis</td>";
echo "<td> : ". $d['Year']. "</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Tanggal Rilis</td>";
echo "<td> : ". $d['Released']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Genre</td>";
echo "<td> : ".implode ("," , $d['Genre'])."</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Director</td>";
echo "<td> : ".$d['Director']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Penulis</td>";
echo "<td>";
      foreach ($d['Writers'] as $d2) {
        echo "<li>$d2</li>";
      }
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Pemeran</td>";
echo "<td>";
      foreach ($d['Actors'] as $d2) {
        echo "<li>$d2</li>";
      }
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Bahasa</td>";
echo "<td> : ".$d['Language']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Negara</td>";
echo "<td> : ".$d['Country']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Penghargaan</td>";
echo "<td> : ".$d['Awards']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Nilai</td>";
echo "<td> : ".$d['imdbRating']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>Vote</td>";
echo "<td> : ".$d['imdbVotes']." Orang </td>";
echo "</tr>";

echo "<tr>";
echo "<td><b>imdbID</td>";
echo "<td> : ".$d['imdbID']."</td>";
echo "</tr>";
echo "</table>";
   
  }


?>