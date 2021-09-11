<!DOCTYPE html>
   <html>
    <head>
      <title>Form Input</title>
    </head>
   
    <body>
    <h2>Latihan For 4 (Segitiga Terbalik)</h2>
      <form action="" method= "POST" >
      <table>
         <tr>
           <td>Masukkan Jumlah</td> 
           <td>:</td> 
           <td><input type = "text" name = "angka"  required></td> 
         </tr>
         <tr>
          <td><td>   
          <td><input type = "submit" name = "simpan" value = "KIRIM"><td>
         </tr>
      </table>
      </form>
    </body>
   </html>
   
   <?php
    if (isset($_POST['simpan'])) {
     $angka = $_POST['angka'];
     
for ($a = 1; $a <= $angka; $a++) {
    for ($b = $angka; $b >= $a; $b--) {
        echo "*";
    }
    for ($c = 1; $c <= $a; $c++){
    echo "&nbsp";
}
 echo "<br> ";
}
}
?>