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
      <title>Latihan 2</title>
      <a href="latihan1.php">Latihan 1</a>
      <a href="latihan2.php">Latihan 2</a>
      <a href="latihan3.php">Latihan 3</a><br><br>
   </center>
   </head>
   <body>
      <form action="" method="POST">
         <fieldset>
            <legend>Menghitung Luas dan Keliling Lingkaran</legend>
         <table>
            <tr>
               <td><label>Masukkan Jari-Jari</label></td>
               <td><input type="number" name="angka" required></td>
             </tr>
             <tr>
                <td></td>
                <td><input type="submit" name="proses" value="Proses"></td>
             </tr>
         </table><br>
      <?php 
   if (isset($_POST['proses'])) {
   $r = $_POST['angka'];
   function lingkaran($r, $phi = 3.14) {
      $luas = $phi * $r * $r;
   return $luas;
   }

   function klingkaran($r, $phi = 3.14) {
   $keliling = 2 * ($phi * $r);
   return $keliling;
   }

   echo "Jari - Jari : " . $r . "<br>";
   echo "Luas Lingkarannya : ". lingkaran($r). "<br>";
   echo "Keliling lingkarannya : " . Klingkaran($r);
   echo "</fieldset>";
   }
?>  
   </body>
  </form>
</html>