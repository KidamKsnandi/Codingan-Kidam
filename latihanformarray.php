<!DOCTYPE html>
<html>
   <head>
      <title>Form Array</title>
   </head>
   <body>
      <center>

      <form action="" method="POST">
        <h2>Data Nilai Ujian Kelas XII RPL</h2>
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
            <form action="hasillatihanformarray.php" method="POST">
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
                      <td>NIS</td>
                      <td>:</td>
                      <td><input type="text" name="nis[]"></td>
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
                      <td>Bahasa Indonesia</td>
                      <td>:</td>
                      <td><input type="number" name="ind[]"></td>
                    </tr>
                    <tr>
                      <td>Bahasa Inggris</td>
                      <td>:</td>
                      <td><input type="number" name="ing[]"></td>
                    </tr>
                    <tr>
                      <td>Matematika</td>
                      <td>:</td>
                      <td><input type="number" name="mtk[]"></td>
                    </tr>
                    <tr>
                      <td>Produktif</td>
                      <td>:</td>
                      <td><input type="number" name="produktif[]"></td>
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