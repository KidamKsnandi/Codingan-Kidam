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

<!-- card -->
<br>
<div class="container">
<div class="card">
  <div class="card-header">
  <center><img src="img\logo.png" height="150 px"></center>
  <center><h2>PENGGAJIHAN</h2></center>
  <center><h2>GURU KARYAWAN YAYASAN ASSALAAM</h2></center>
  <br>
  </div>
  <div class="card-body">
    <!-- FORM INPUT -->
    <form method="POST" action="hasillatihanpenggajihan.php">
      <div class="container">
      <div class="form-group row">
    <label class="col-sm-2 col-form-label">No</label>
    <div class="col-sm-4">
      <input type="number" name="no" class="form-control" required>
    </div>
  </div>  
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" required>
    </div>
  </div>
  <div class="form-group row">
<label class="col-sm-2 col-form-label">Unit</label> 
<div class="col-sm-10">
<select class="form-control" name="unit" required>
         <option value="">--- Pilih Unit ---</option>
         <option value="TK">TK</option>
         <option value="SD">SD</option>
         <option value="SMP">SMP</option>
         <option value="MTS">MTS</option>
         <option value="SMA">SMA</option>
         <option value="SMK">SMK</option>
</select>
</div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-10">
      <input type="date" name="tanggal" class="form-control" required>
    </div>
  </div>
  <center><h3>Gaji</h3></center>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Jabatan</label> 
<div class="col-sm-10">
<select class="form-control" name="jabatan" required>
         <option value="">--- Pilih Jabatan ---</option>
         <option value="Kepala Sekolah">Kepala Sekolah</option>
         <option value="Guru">Guru</option>
         <option value="Karyawan">Karyawan</option>
</select>
</div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Lama Kerja</label>
    <div class="col-sm-4">
      <input type="number" name="lamakerja" class="form-control" required>
    </div>
  </div>  
  <div class="form-group row">
<label class="col-sm-2 col-form-label">Status Kerja</label> 
<div class="col-sm-10">
<select class="form-control" name="statuskerja" required>
         <option>--- Status Kerja ---</option>
         <option value="Pegawai Tetap">Pegawai Tetap</option>
         <option value="Pegawai Kontrak">Pegawai Kontrak</option>
</select>
</div>
</div>
<center><h3>Potongan</h3></center>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">BPJS</label>
    <div class="col-sm-4">
      <input type="number" name="bpjs" class="form-control" required> 
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Pinjaman</label>
    <div class="col-sm-4">
      <input type="number" name="pinjaman" class="form-control" required> 
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Tabungan</label>
    <div class="col-sm-4">
      <input type="number" name="tabungan" class="form-control" required> 
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Lainnya</label>
    <div class="col-sm-4">
      <input type="number" name="lainnya" class="form-control" required> 
    </div>
  </div>
<div>
  <button type="submit" name="proses" class="btn btn-primary">Proses</button>
  </div>
</form>
    </div>
    
</div>

  </body>
</html>