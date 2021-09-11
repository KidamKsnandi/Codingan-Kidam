<!DOCTYPE html>
<html>
   <head>
     <style>
       a {
         text-decoration: none;
         color: black;
         padding: 12px;
       }
       a:hover {
         color: blue;
       }
     </style>
     <center>
      <title>Latihan 3</title>
      <a href="latihan1.php">Latihan 1</a>
      <a href="latihan2.php">Latihan 2</a>
      <a href="latihan3.php">Latihan 3</a><br><br>
      </center>
   </head>
   <body>
      <form action="" method="POST">
          <fieldset>
              <legend>FORM BIODATA DIRI</legend>
              <table>
                 <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jk" value="Laki-Laki" required>Laki-Laki
                       <input type="radio" name="jk" value="Perempuan" required>Perempuan</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tl"></td>
                  </tr>
                  <tr>
                    <td>Agama</td>
                    <td><select name="agama" required>
                        <option value="">Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
                  </tr>
                  <tr>
                    <td>Hobi</td>
                    <td><input type="checkbox" name="hobi[]" value="Bulutangkis">Bulutangkis
                        <input type="checkbox" name="hobi[]" value="Sepak Bola ">Sepak Bola
                        <input type="checkbox" name="hobi[]" value="Ngoding ">Ngoding
                        <input type="checkbox" name="hobi[]" value="Nonton ">Nonton
                        <input type="checkbox" name="hobi[]" value="Membaca ">Membaca
                        <input type="checkbox" name="hobi[]" value="Rebahan ">Rebahan
                   </td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="submit" name="pilih" value="Piiih"></td>
                  </tr>
              </table>
          </fieldset><br>
          <?php 
          
          if(isset($_POST['pilih'])) {
              $nama = $_POST['nama'];
              $jk = $_POST['jk'];
              $tl = $_POST['tl'];
              $agama = $_POST['agama'];
              $alamat = $_POST['alamat'];
              $hobi = $_POST['hobi'];
              echo "<fieldset>";
              echo "=========== Biodata Diri =========== <br>";
              function tampilBiodata($nama, $jk, $tl, $agama, $alamat, $hobi) {
                  echo "<table>";
                  echo "<tr>";
                  echo "<td>Nama</td> <td>: " . $nama . "</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo "<td>Jenis Kelamin</td> <td>: " . $jk . "</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo "<td>Tanggal Lahir</td> <td>: " . $tl . "</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo "<td>Agama</td> <td>: " . $agama . "</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo "<td>Alamat</td> <td>: " . $alamat . "</td>";
                  echo "</tr>";
                  echo "<tr>";
                  echo "<td>Hobi</td>";
                  echo "<td>";
                  foreach ($hobi as $hobis) {
                      echo "<li>" . $hobis . "</li>" ;
                  }  
                  echo "</td>";
                  echo "</tr>";
                  echo "</table>";
              }
             tampilBiodata($nama, $jk, $tl, $agama, $alamat, $hobi);
              echo "</fieldset>";
          }
          
          ?>
      </form>
   </body>
</html>