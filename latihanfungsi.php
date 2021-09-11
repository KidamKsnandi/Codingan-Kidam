<!DOCTYPE html>
<html>
   <body>
      <style>
          td {
            text-align: center;
          }
      </style>
   </body>
</html>
<?php 
  echo "<center>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>Nama</th>";
  echo "<th>Matematika</th>";
  echo "<th>Bahasa Inggris</th>";
  echo "<th>Bahasa Indonesia</th>";
  echo "<th>Kejuruan</th>";
  echo "<th>Rata-rata</th>";
  echo "<th>Status</th>";
  echo "<th>Grade</th>";
  echo "</tr>";
    function nilai($nama, $mtk, $bing, $bi, $kejuruan) {
        echo "<tr>";
        echo "<td>$nama</td>";
        echo "<td>$mtk</td>";
        echo "<td>$bing</td>";
        echo "<td>$bi</td>";
        echo "<td>$kejuruan</td>";
        $rata = ($mtk + $bing + $bi + $kejuruan) / 4;
        echo "<td>$rata</td>";
        if($rata >= 75) {
            echo "<td>Lulus</td>";
            }else {
            echo "<td>Tidak Lulus </td>";
            }
            if($rata >= 90 && $rata <= 100) {
                echo "<td>A</td>";
                } else if($rata >= 80 && $rata <= 89) {
                echo "<td>B</td>";
                } else if($rata >= 70 && $rata <= 79) {
                echo "<td>C</td>";
                } else if($rata >= 50 && $rata <= 69) {
                echo "<td>D</td>";
                } else if($rata >= 0 && $rata <= 49) {
                echo "<td>E</td>";
                } 
        echo "</tr>";
       
    }
    nilai("Ujang",70,50,70,60);
    nilai("Kidam",60,90,80,80);
    nilai("Nandi",90,100,30,100);

    echo "</table>";
    echo "</center>";
?>