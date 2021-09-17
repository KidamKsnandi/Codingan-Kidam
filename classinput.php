
<!DOCTYPE html>
<html>
   <head>
      <title>Contoh class input</title>
   </head>
   <body>
       <form action="" method="POST">
      <table>
         <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
          </tr>
          <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
          </tr>
      </table>
      </form>
      <?php 
      if(isset($_POST['proses'])) {
         $nim = $_POST['nim'];
         $nama = $_POST['nama'];
         $kelas = $_POST['kelas'];
         class input {
            public $x;
            public $y;
            public $z;
            public function data($a,$b, $c) {
               $this->x = $a;
               $this->y = $b;
               $this->z = $c;
            } 
         }
         $data = new input();
         $data->data($nim,$nama,$kelas);

         echo "NIM : ".$data->x."<br>";
         echo "Nama : ".$data->y."<br>";
         echo "Kelas : ".$data->z;
      }
      
      ?>
   </body>
</html>