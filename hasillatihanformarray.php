<?php 
    if (isset($_POST['simpan'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $ind = $_POST['ind'];
        $ing = $_POST['ing'];
        $mtk = $_POST['mtk'];
        $produktif = $_POST['produktif'];
    }

?>
<!DOCTYPE html>
<html>
   <head>
      <title>Hasil Form Array</title>
   </head>
   <body>
      <center>
          <h2>Data Siswa Kelas XII RPL 2</h2>
          <table border=1>
             <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>
                <th>Total Nilai</th>
                <th>Rata-Rata</th>
                <th>Grade</th>
                <th>Status</th>
              </tr>
              <?php 
              for ($i=0; $i < count($nis); $i++) { 
              ?>
              <tr>
                  <td><?= $nis[$i]; ?></td>
                  <td><?= $nama[$i]; ?></td>
                  <td><?= $kelas[$i]; ?></td>
                  <td><?= $ind[$i]; ?></td>
                  <td><?= $ing[$i]; ?></td>
                  <td><?= $mtk[$i]; ?></td>
                  <td><?= $produktif[$i];?></td>
                  <?php 
                    $total = $ind[$i] + $ing[$i] + $mtk[$i] +$produktif[$i] ;
                  ?>
                  <td><?= $total; ?></td>
                  <?php 
                    $rata = $total / 4; 
                  ?>
                  <td><?= $rata; ?></td>
                  <?php 
                    if($rata >= 75 && $rata <= 100) {
                    echo "<td>A</td>";
                    } else if($rata >= 80 && $rata <= 89) {
                    echo "<td>B</td>";
                    } else if($rata >= 75 && $rata <= 79) {
                    echo "<td>C</td>";
                    } else if($rata >= 50 && $rata <= 74) {
                    echo "<td>D</td>";
                    } else if($rata >= 0 && $rata <= 49) {
                    echo "<td>E</td>";
                    } 
                    if($rata >= 75) {
                    echo "<td>Lulus</td>";
                    }else {
                    echo "<td>Tidak Lulus </td>";
                    }
                    }
                  ?>
              </tr>
          </table>
      </center>
   </body>
</html>