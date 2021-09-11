<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="kombinasi.php">Kidam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="soal1.php">Penggajihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="soal2.php">Vaksin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="soal3.php">Pengulangan <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>

<!-- FORM INPUT -->
<form action="" method="POST">
      <div class="container">
          <br>
        <center><h2>Syarat Masuk Ke MIKO MALL</h2></center>
        <br>
      <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Anda</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" required>
    </div>
  </div>  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Umur</label>
    <div class="col-sm-10">
      <input type="number" name="umur" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
<label class="col-sm-2 col-form-label">Status Vaksin</label> 
<div class="col-sm-10">
<select class="form-control" name="vaksin" required>
         <option value="">--- Status Vaksin ---</option>
         <option value="Sudah Vaksin">Sudah Vaksin</option>
         <option value="Belum Vaksin">Belum Vaksin</option>
</select>
</div>
</div>
  <div>
  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
  </div>
</form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
<?php
    if(isset($_POST['simpan'])) {
   $nama = $_POST['nama'];
   $umur = $_POST['umur'];
   $vaksin = $_POST['vaksin'];
   echo "<br>"; 
   echo "<center>";
   echo "<table>";
   echo "<tr>";
   echo "<td> Nama Anda </td>"; 
   echo "<td> : </td>"; 
   echo "<td> $nama </td>";
   echo "</tr>";
   echo "<tr>";
   echo "<td> Umur </td>"; 
   echo "<td> : </td>"; 
   echo "<td> $umur Tahun </td>";
   echo "</tr>";
   if ($umur >= 12 && $umur <=50){
     echo "<tr>";
     echo "<td> Status Vaksin </td>"; 
     echo "<td> : </td>"; 
     echo "<td> $vaksin </td>";
     echo "</tr>";
     echo "</table>";
     if($vaksin == "Sudah Vaksin") {
       echo "<br><b><i>Diizinkan<i><b>";
     } else if ($vaksin == "Belum Vaksin") {
       echo "<br><b><i>TIdak Diizinkan</i></b> <br>";
    ?>
      <br>
       <a href="https://pedulilindungi.id/">Silahkan Daftar Vaksin</a>
    <?php
     }
   } else  {
    echo "<tr>";
    echo "<td> Status Vaksin </td>"; 
    echo "<td> : </td>"; 
    echo "<td> $vaksin </td>";
    echo "</tr>";
    echo "</table>";
    if ($vaksin == "Sudah Vaksin") {
      echo "<br><b><i>TIdak Diizinkan</i></b>";
    } else if ($vaksin == "Belum Vaksin") {
      echo "<br><b><i>TIdak Diizinkan</i></b> <br>";
   ?>
      <br>
      <a href="https://pedulilindungi.id/">Silahkan Daftar Vaksin</a>
   <?php
    }         
    }
    echo "</center>";
  }
  echo "</fieldset>";
   
?>