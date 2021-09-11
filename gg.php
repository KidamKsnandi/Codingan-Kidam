<!DOCTYPE html>
   <html>
    <head>
      <title>Form Input</title>
    </head>
   
    <body>
    <center> <h2>Form Pengulangan</h2>
      <form action="" method= "POST" >
      <table>
         <tr>
           <td>Masukkan Angka</td> 
           <td>:</td> 
           <td><input type = "text" name = "angka"  required></td> 
         </tr>
         <tr>
          <td><td>   
          <td><input type = "submit" name = "simpan" value = "KIRIM"><td>
         </tr>
      </table>
      </form>
      </center>
    </body>
   </html>
   
   <?php
    if (isset($_POST['simpan'])) {
     $angka = $_POST['angka'];
     echo "Bilangan Terbesar ke Terkecil :<br>";
     for ($i = $angka; $i >= 1 ; $i--) {
       echo "$i "; 
     }
   echo "<br><br>";
   
   echo "Bilangan Genap :<br>";
   if ($angka % 2) {
    echo "<b>Itu Bilangan Ganjil Ngab!!!</b>";
   }else {
   for ($i = 2; $i <= $angka ; $i+=2) {
    echo "$i "; 
   }
  }
  echo "<br><br>";
  
  echo "Segitiga :<br>";
  for ($a = 1; $a <= $angka; $a++) {
    for ($b = 10; $b >= $a; $b--) {
        echo "";
    }
    for ($c = 1; $c <= $a; $c++){
    echo "*";
}
 echo "<br> ";
}
  echo "<br>";
   
  echo "Segitiga Terbalik : <br>";
  for ($a = 1; $a <= $angka; $a++) {
    for ($b = $angka; $b >= $a; $b--) {
        echo "*";
    }
    for ($c = 1; $c <= $a; $c++){
    echo "";
}
 echo "<br> ";
}
 echo "<br>";
  
 echo "Segitiga Sama Kaki :<br>";
 for ($a = 1; $a <= $angka; $a++) {
    for ($b = $angka; $b >= $a; $b--) {
        echo "&nbsp";
    }
    for ($c = 1; $c <= $a; $c++){
    echo "*";
}
 echo "<br> ";
}
}  
?>