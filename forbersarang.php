<!DOCTYPE html>
<html>
 <head>
   <title>Form Input</title>
 </head>

 <body>
 <h2>For</h2>
   <form action="" method= "POST" >
   <table>
      <tr>
        <td>Masukkan Angka</td> 
        <td>:</td> 
        <td><input type = "text" name = "angka"  required></td> 
      </tr>
      <tr>
       <td><td>   
       <td><input type = "submit" name = "simpan" value = "SIMPAN"><td>
      </tr>
   </table>
   </form>
 </body>
</html>
<?php
if (isset($_POST['simpan'])) {
    $angka = $_POST['angka'];
   for ($i = 1; $i <= $angka; $i++) {
       for ($a = 1; $a <= $i; $a++) {
           echo "Perulangan $a <br>";
       }
       echo "<br>";
   }
}

?>