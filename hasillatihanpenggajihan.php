
<?php 
if(isset($_POST['proses'])) {
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $unit = $_POST['unit'];
  $tanggal = $_POST['tanggal'];
  $jabatan = $_POST['jabatan'];
  $lamakerja = $_POST['lamakerja'];
  $statuskerja = $_POST['statuskerja'];
  $bpjs = $_POST['bpjs'];
  $pinjaman = $_POST['pinjaman'];
  $tabungan = $_POST['tabungan'];
  $lainnya = $_POST['lainnya'];

  class Penggajihan {
    public $no, $nama ,$unit, $tanggal,
    $jabatan, $lamakerja, $statuskerja, $tgaji,
    $bpjs, $pinjaman, $tabungan, $lainnya, $tpotongan, $jyd;
    public function tampilPenggajihan($no, $nama, $unit, $tanggal) {
      $this->no = $no;
      $this->nama = $nama;
      $this->unit = $unit;
      $this->tanggal = $tanggal;
      echo "<center> ";
      echo "<table>";
      echo "<tr>";
      echo "<td>No</td> <td>:</td> <td>$no</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Nama</td> <td>:</td> <td>$nama</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Unit</td> <td>:</td> <td>$unit</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Tanggal</td> <td>:</td> <td>$tanggal</td>";
      echo "</tr>";
    }
  }
  class gaji extends Penggajihan {
      public function tampilGaji($jabatan, $lamakerja, $statuskerja) {
          $this->jabatan = $jabatan;
          $this->lamakerja = $lamakerja;
          $this->statuskerja = $statuskerja;
        
          if($jabatan == "Kepala Sekolah") {
              $gaji = 5000000;
          } else if($jabatan == "Guru") {
            $gaji = 3000000;
          } else if($jabatan == "Karyawan") {
            $gaji = 1500000;
        }
          echo "<tr>";
          echo "<td><td><td><td><td><td><h3><i>Gaji</i></h3>";
          echo "</tr>";
          echo "<tr>";
          echo "<td><td><td><td>Jabatan</td> <td>:</td> <td>$jabatan</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td><td><td><td>Gaji</td> <td>:</td> <td>Rp.".number_format($gaji)."</td>";
          echo "</tr>";

          if($lamakerja > 0 || $lamakerja <=5) {
            $blk = 250000;
          } else if($lamakerja > 5 || $lamakerja <=10) {
            $blk = 500000;
          } else {
            $blk = 1000000;
          }
          echo "<tr>";
          echo "<td><td><td><td>Lama Kerja</td> <td>:</td> <td>$lamakerja</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td><td><td><td>Bonus Lama Kerja</td> <td>:</td> <td>Rp.".number_format($blk)."</td>";
          echo "</tr>";

          if($statuskerja == "Pegawai Tetap") {
              $tsk = 500000;
          } else if ($statuskerja == "Pegawai Kontrak") {
              $tsk = 0;
          }
          echo "<tr>";
          echo "<td><td><td><td>Status Kerja</td> <td>:</td> <td>$statuskerja</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td><td><td><td>Tunjangan Status Kerja</td> <td>:</td> <td>Rp.". number_format($tsk)."</td>";
          echo "</tr>";
          echo "<tr>";
          $this->tgaji = $gaji + $blk + $tsk;  
          echo "<td><td><td><td><b>Total Gaji</td> <td>:</td> <td>Rp.".number_format($this->tgaji)."</td>";
          echo "</tr>";
          echo "</center>";
      }
  }

  class potongan extends gaji{
      public function tampilPotongan($bpjs, $pinjaman, $tabungan, $lainnya) {
        $this->bpjs = $bpjs;
        $this->pinjaman = $pinjaman;
        $this->tabungan = $tabungan;
        $this->lainnya = $lainnya;
          echo "<tr>";
          echo "<td><td><td><td><td><td><h3><i><br>Potongan</i></h3>";
          echo "</tr>";
          echo "<tr>";
          echo "<td><td><td><td>BPJS</td> <td>:</td> <td>Rp.".number_format($bpjs)."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td><td><td><td>Pinjaman</td> <td>:</td> <td>Rp.".number_format($pinjaman)."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td><td><td><td>Tabungan</td> <td>:</td> <td>Rp.".number_format($tabungan)."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td><td><td><td>Lainnya</td> <td>:</td> <td>Rp.".number_format($lainnya)."</td>";
          echo "</tr>";
          $this->tpotongan = $bpjs + $pinjaman + $tabungan + $lainnya;
          echo "<tr>";
          echo "<td><td><td><td><b>Total Potongan</td> <td>:</td> <td>Rp.".number_format($this->tpotongan)."</b></td>";
          echo "</tr>";
          $this->jyd = $this->tgaji - $this->tpotongan;
          echo "<tr>";
          echo "<td><td><td><td><br><h2><i>Jumlah Yang Diterima <td><br><h2>:</td> <td><h2><br>Rp.".number_format($this->jyd)."</h2></td></i>";
          echo "</tr>";
          echo "</table>";
          echo "</center>"; 
          
      }
  }

  $tampilkan = new potongan;
  $tampilkan->tampilPenggajihan($no, $nama ,$unit, $tanggal);
  $tampilkan->tampilGaji($jabatan, $lamakerja ,$statuskerja);
  $tampilkan->tampilPotongan($bpjs, $pinjaman, $tabungan, $lainnya);
  
}

?>