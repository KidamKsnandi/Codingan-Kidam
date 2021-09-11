<!DOCTYPE html>
<html>
   <head>
      <title>Form Array</title>
   </head>
   <body>
      <center>

      <form action="" method="POST">
        <h2>Data siswa Kelas XII RPL</h2>
        <table>
           <tr>
              <td>Jumlah Siswa</td>
              <td>:</td>
              <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="Proses"></td>
            </tr>
        </table>
        <br>
      </form>
      <?php 
      if(isset($_POST['proses'])) {
          $jumlah = $_POST['jumlah'];
      ?>
            <form action="hasilformarray.php" method="POST">
                <table>
                    <?php 
                    for ($i=1; $i <= $jumlah; $i++) { 
                     ?>
                   <tr>
                      <td></td>
                      <td></td>
                      <td>Data Siswa Ke - <?= $i; ?></td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td>:</td>
                      <td><input type="text" name="nama[]"></td>
                    </tr>
                    <tr>
                      <td>Kelas</td>
                      <td>:</td>
                      <td><input type="text" name="kelas[]"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jk[]" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jk[]" value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><select name="jurusan[]">
                            <option value=""></option>
                            <option value="RPL">RPL</option>
                            <option value="TBSM">TBSM</option>
                            <option value="TKRO">TKRO</option>
                        </select></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="simpan" value="Simpan"></td>
                    </tr>
                </table>
            </form>
            <?php } ?>
      </center>
   </body>
</html>