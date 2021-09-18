<!DOCTYPE html>
<html>
   <head>
      <title>Kalkulator</title>
   </head>
   <body>
      <form action="" method="POST">
      <input type="number" name="angka1">
      <select name="perhitungan">
       <option value="tambah">+</option>
       <option value="kurang">-</option>
       <option value="kali">x</option>
       <option value="bagi">/</option>
     </select>
     <input type="number" name="angka2">
     <input type="submit" name="hitung" value="Hitung">
     </form>
   </body>
</html>


<?php
if(isset($_POST['hitung'])) {
   $angka1 = $_POST['angka1'];
   $angka2 = $_POST['angka2'];
}
class Matematika
{
  private $angka1;
  private $angka2;

  public function Tambah($angka1, $angka2)
  {
    $this->angka1 = $angka1;
    $this->angka2 = $angka2;
    $hasil = $this->angka1 + $this->angka2;
    return $hasil;
  }

  public function Kali($angka1, $angka2)
  {
    $this->angka1 = $angka1;
    $this->angka2 = $angka2;
    $hasil = $this->angka1 * $this->angka2;
    return $hasil;
  }

  public function Kurang($angka1, $angka2)
  {
    $this->angka1 = $angka1;
    $this->angka2 = $angka2;
    $hasil = $this->angka1 - $this->angka2;
    return $hasil;
  }

  public function Bagi($angka1, $angka2)
  {
    $this->angka1 = $angka1;
    $this->angka2 = $angka2;
    $hasil = $this->angka1 / $this->angka2;
    return $hasil;
  }
}

$data = new Matematika();

   if ($_POST['perhitungan'] == "tambah") {
        echo "Hasil ".$angka1." + ".$angka2." = ".$data->Tambah($angka1, $angka2);
      } elseif ($_POST['perhitungan'] == "kali") {
        echo "Hasil ".$angka1." x ".$angka2." = ".$data->Kali($angka1, $angka2);
      } elseif ($_POST['perhitungan'] == "kurang") {
        echo "Hasil ".$angka1." - ".$angka2." = ".$data->Kurang($angka1, $angka2);
      } elseif ($_POST['perhitungan'] == "bagi") {
        echo "Hasil ".$angka1." / ".$angka2." = ".$data->Bagi($angka1, $angka2);
      }
  
?>