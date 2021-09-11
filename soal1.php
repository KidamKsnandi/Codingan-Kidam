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

<!-- card -->
<br>
<div class="container">
<div class="card">
  <div class="card-header">
    <br>
  <center><h2>Program Penggajihan</h2></center>
  <center><h2>PT GARUDA KELINCI AKUR</h2></center>
  <br>
  </div>
  <div class="card-body">
    <!-- FORM INPUT -->
    <form method="POST" action="">
      <div class="container">
      <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Bendahara</label>
    <div class="col-sm-10">
      <input type="text" name="bendahara" class="form-control" required>
    </div>
  </div>  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama Pekerja</label>
    <div class="col-sm-10">
      <input type="text" name="pekerja" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jk" value="Laki-Laki" required>
  <label class="form-check-label" >Laki-Laki</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jk" value="Perempuan">
  <label class="form-check-label" >Perempuan</label>
</div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Tanggak Gaji</label>
    <div class="col-sm-10">
      <input type="date" name="tanggal" class="form-control" required>
    </div>
  </div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Jabatan</label> 
<div class="col-sm-10">
<select class="form-control" name="pekerjaan" required>
         <option value="">--- Pilih Jabatan ---</option>
         <option value="Direktur">Direktur</option>
         <option value="Manajer">Manajer</option>
         <option value="Karyawan">Karyawan</option>
         <option value="OB">OB</option>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Pendidikan Terakhir</label> 
<div class="col-sm-10">
<select class="form-control" name="pk" required>
         <option>--- Pendidikan Terakhir ---</option>
         <option value="SD">SD</option>
         <option value="SMP">SMP</option>
         <option value="SMA">SMA</option>
         <option value="S1">S1</option>
</select>
</div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Lembur</label>
    <div class="col-sm-4">
      <input type="number" name="lembur" class="form-control" placeholder="Hari/20.000" required> 
      
    </div>
  </div>
<div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Potongan</label>
    <div class="col-sm-4">
      <input type="number" name="potongan" class="form-control" required> 
      
    </div>
  </div>
<div>
  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
  </div>
</form>
    </div>
    
</div>



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
      $bendahara = $_POST['bendahara'];
      $pekerja = $_POST['pekerja'];
      $jk = $_POST['jk'];
      $tgl = $_POST['tanggal'];
      $pekerjaan = $_POST['pekerjaan'];
      $pk = $_POST['pk'];
      $lembur = $_POST['lembur'];
      $potongan = $_POST['potongan'];
      echo "<center>";
      echo "<h2>Struck Gaji Karyawan</h2>";
      echo "<h2>.........................................................................................</h2>";
      echo "<h2>...............</h2>";
      echo "<table>";
      echo "<tr>";
      echo "<td></td>"; 
      echo "<td></td>"; 
      echo "<td></td>";
      echo "<td></td>";
      echo "<td>Tanggal :  <b><i>$tgl</i></b></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td><h3><i>Gaji Pokok<i><h3></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Nama $pekerjaan </td>";
      echo "<td> : </td> ";
      echo "<td> $pekerja </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> Jenis Kelamin </td>";
      echo "<td> : </td> ";
      echo "<td> $jk </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
      echo "<td> Pendidikan Terakhir </td>"; 
      echo "<td> : </td>"; 
      echo "<td> $pk </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<tr>";
      echo "<td> Jabatan </td>"; 
      echo "<td> : </td>"; 
      echo "<td> $pekerjaan </td>";
      echo "</tr>";
      echo "<tr>";
        if($pekerjaan == "Direktur") {
            $gaji = 10000000; //10.000.000
            echo "<td> Gaji </td>"; 
            echo "<td> : </td>"; 
            echo "<td> Rp.$gaji </td>";
            echo "</tr>";
          } else if ($pekerjaan == "Manajer") {
            $gaji = 7500000; //7.500.000
            echo "<td> Gaji </td>"; 
            echo "<td> : </td>"; 
            echo "<td> Rp.$gaji </td>";
            echo "</tr>";
          }
          else if ($pekerjaan == "Karyawan") {
            $gaji = 5000000; //5.000.000
            echo "<td> Gaji </td>"; 
            echo "<td> : </td>"; 
            echo "<td> Rp.$gaji </td>";
            echo "</tr>";
          }
          else if ($pekerjaan == "OB") {
            $gaji = 2500000; //2.500.000
            echo "<td> Gaji </td>"; 
            echo "<td> : </td>"; 
            echo "<td>Rp.$gaji </td>";
            echo "</tr>";
          }
      
      echo "<tr>";
      echo "<td><h3><i>Tunjangan<i><h3></td>";
      echo "</tr>";
      if ($pk == "SD") {
        $tp = 250000; //250.000
        echo "<td>Tunjangan Pendidikan </td>"; 
        echo "<td> : </td>"; 
        echo "<td>Rp.$tp</td>";
        echo "</tr>";
      } else if ($pk == "SMP") {
        $tp = 500000; //500.000
        echo "<td>Tunjangan Pendidikan </td>"; 
        echo "<td> : </td>"; 
        echo "<td>Rp.$tp </td>";
        echo "</tr>";
      } else if ($pk == "SMA") {
        $tp = 1000000; //1000.000
        echo "<td>Tunjangan Pendidikan </td>"; 
        echo "<td> : </td>"; 
        echo "<td>Rp.$tp </td>";
        echo "</tr>";
      } else if ($pk == "S1") {
        $tp = 1500000; //1.500.000
        echo "<td>Tunjangan Pendidikan </td>"; 
        echo "<td> : </td>"; 
        echo "<td>Rp.$tp </td>";
        echo "</tr>";
      }
      $vlembur = $lembur * 20000;
      echo "<tr>";
      echo "<td>Vakasi Lembur</td>"; 
      echo "<td>:</ td>";
      echo "<td>$lembur hari dapat Rp.$vlembur </td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td><h3><i>Potongan<i><h3></td>";
      echo "</tr>";

      $tgaji = $gaji + $tp + $vlembur;
      if ($potongan == "") {
      echo "<tr>";
      echo "<td>Potongan</td>"; 
      echo "<td>:</ td>";
      echo "<td> Rp.0 </td>";
      echo "</tr>";
      echo "<td><b><i><h3>Total Gaji</b></td>"; 
      echo "<td><b><i>:</b></ td>";
      echo "<td><b><i>Rp.$tgaji</b> </td>";
      echo "</tr>";
      } else {
        $tpgaji = $tgaji - $potongan;
      echo "<tr>";
      echo "<td>Potongan</td>"; 
      echo "<td>:</ td>";
      echo "<td> Rp.$potongan </td>";
      echo "</tr>";
      echo "<td><b><i><h3>Total Gaji</b></td>"; 
      echo "<td><b><i>:</b></ td>";
      echo "<td><b><i>Rp.$tpgaji</b></td>";
      echo "</tr>";
      }
      echo "<tr>";
      echo "<td></td>"; 
      echo "<td></td>"; 
      echo "<td></td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td></td>"; 
      echo "<td></td>"; 
      echo "<td></td>";
      echo "<br> <td>Bendahara : $bendahara</td>";
      echo "</tr>";
      echo "</table>";
      echo "</center";
      echo "</fieldset>";
      }

?>