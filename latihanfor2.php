<!DOCTYPE html>
   <html>
    <head>
      <title>Form Input</title>
    </head>
   
    <body>
    <h2>Latihan For 2 (Bilangan genap)</h2>
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
      if ($angka % 2) {
          echo "<b>Itu Bilangan Ganjil Ngab!!!<b>";
      }else {
     for ($i = 2; $i <= $angka ; $i+=2) {
       echo "$i <br>"; 
     }
     }
   }
   
?>