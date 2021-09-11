<?php 
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jk = $_POST['jk'];
        $jurusan = $_POST['jurusan'];
    }

?>
<!DOCTYPE html>
<html>
   <head>
      <title>Hasil Form Array</title>
   </head>
   <body>
      <center>
          <h2>Data Siswa Kelas XII RPL 2</h2>
          <table border=1>
             <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
              </tr>
              <?php 
              for ($i=0; $i < count($nama); $i++) { 
              ?>
              <tr>
                  <td><?= $nama[$i]; ?></td>
                  <td><?= $kelas[$i]; ?></td>
                  <td><?= $jk[$i]; ?></td>
                  <td><?= $jurusan[$i]; }?></td>
              </tr>
          </table>
      </center>
   </body>
</html>