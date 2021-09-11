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
      <title>Latihan 1</title>
      <a href="latihan1.php">Latihan 1</a>
      <a href="latihan2.php">Latihan 2</a>
      <a href="latihan3.php">Latihan 3</a><br><br>
      </center>
   </head>
   <body>
        
   </body>
</html>
<?php

function tentang_saya ($nama, $umur) {
    return "Hi, Saya $nama dan Umur Saya $umur Tahun";
}
  echo tentang_saya("Kidam Kusnandi", 17);
?>