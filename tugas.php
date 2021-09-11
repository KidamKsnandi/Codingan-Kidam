<!DOCTYPE html>
<html>
  <body>
  <form action="" method="POST">
    <table>
     <tr>
     <td>Nama Bendahara</td>
     <td>:</td>
     <td><input type="text" name="bendahara" required></td>
     </tr>
     <tr>
     <td>Nama Karyawan</td>
     <td>:</td>
     <td><input type="text" name="karyawan" required></td>
     </tr>
     <tr>
     <td>Tanggal</td>
     <td>:</td>
     <td><input type="date" name="tanggal" required></td>
     </tr>
     <tr>
     <td>Pekerjaan</td>
     <td>:</td>
     <td><select name="pekerjaan" required>
         <option selected="selected">Pilih</option>
         <option value="Administrasi">Administrasi</option>
         <option value="Gudang">Gudang</option>
     </select></td>
     </tr>
     <tr>
     <td>Pendidikan Terakhir</td>
     <td>:</td>
     <td><select name="pk">
         <option selected="selected">Pilih</option>
         <option value="SD">SD</option>
         <option value="SMP">SMP</option>
         <option value="SMA">SMA</option>
         <option value="S1">S1</option></td>
         </select>
     </tr>
     <tr>
     <td>Lembur</td>
     <td>:</td>
     <td><input type="text" name="lembur" >/hari</td>
     </tr>
     <tr>
     <td></td>
     <td></td>
     <td><input type="submit" name="simpan" value="Kirim"></td>
     </tr>
     <br>
    </table>
    </form>
  </body>
</html>
<?php
  if(isset($_POST['simpan'])) {
      $bendahara = $_POST['bendahara'];
      $karyawan = $_POST['karyawan'];
      $tgl = $_POST['tanggal'];
      $pekerjaan = $_POST['pekerjaan'];
      $pk = $_POST['pk'];
      $lembur = $_POST['lembur'];
      echo "<table>";
      echo "<tr>";
      echo "<td></td>"; 
      echo "<td></td>"; 
      echo "<td></td>";
      echo "<td>Tanggal</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>"; 
      echo "<td></td>"; 
      echo "<td></td>";
      echo "<td>$tgl</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Nama Karyawan </td>";
      echo "<td> : </td> ";
      echo "<td> $karyawan </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Pekerjaan </td>";
      echo "<td> : </td> ";
      echo "<td> $pekerjaan </td>";
      echo "</tr>";
      echo "<tr>";
      if($pekerjaan == "Administrasi") {
        $gaji = 200000;
        echo "<td> Gaji </td>"; 
        echo "<td> : </td>"; 
        echo "<td> $gaji </td>";
        echo "</tr>";
      } else if ($pekerjaan == "Gudang") {
        $gaji = 100000;
        echo "<td> Gaji </td>"; 
        echo "<td> : </td>"; 
        echo "<td> $gaji </td>";
        echo "</tr>";
      }
      echo "<tr>";
      echo "<td> Pendidikan Terakhir </td>"; 
      echo "<td> : </td>"; 
      echo "<td> $pk </td>";
      echo "</tr>";
      echo "<tr>";
        if ($pk == "SD") {
          $bonus = 20000; 
        echo "<td> Bonus </td>"; 
        echo "<td> : </td>"; 
        echo "<td> $bonus </td>";
        echo "</tr>";
        } else if ($pk == "SMP") {
          $bonus = 30000; 
        echo "<td> Bonus </td>"; 
        echo "<td> : </td>"; 
        echo "<td> $bonus </td>";
        echo "</tr>";
        } else if ($pk == "SMA") {
          $bonus = 30000; 
        echo "<td> Bonus </td>"; 
        echo "<td> : </td>"; 
        echo "<td> $bonus </td>";
        echo "</tr>";
        } else if ($pk == "S1") {
          $bonus = 40000; 
        echo "<td> Bonus </td>"; 
        echo "<td> : </td>"; 
        echo "<td> $bonus </td>";
        echo "</tr>";
        }
      $blembur = $lembur * 20000;
      echo "<tr>";
      echo "<td>Lembur</td>"; 
      echo "<td>:</ td>";
      echo "<td> $lembur" . " hari </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Bonus Lembur</td>"; 
      echo "<td>:</ td>";
      echo "<td> $blembur</td>";
      echo "</tr>";
      echo "<tr>";
      $tgaji = $gaji + $bonus + $blembur;
      echo "<td>Total Gaji</td>"; 
      echo "<td>:</ td>";
      echo "<td> $tgaji</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>"; 
      echo "<td></td>"; 
      echo "<td></td>";
      echo "<td>Bendahara</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>"; 
      echo "<td></td>"; 
      echo "<td></td>";
      echo "<td>$bendahara</td>";
      echo "</tr>";
      
      echo "</table>";
      }
  
?>