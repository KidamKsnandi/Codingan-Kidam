<?php 

class penggajihan{

    public $tgaji;
    public $tpengeluaran;

    public function gaji($jabatan,$pendidikan) {
        echo "<h2><i>Pendapatan Gaji</i></h2>";
        echo "<table>";
        echo "<tr>";
        echo "<td>Jabatan</td> <td>:</td> <td>$jabatan</td>";
        echo "</tr>";
        if($jabatan == "Direktur") {
            $gaji = 10000000;
        }  else if ($jabatan == "Manager") {
            $gaji = 5000000; 
        }
          else if ($jabatan == "Karyawan") {
            $gaji = 3000000; 
        }
        echo "<td> Gaji </td>"; 
        echo "<td> : </td>"; 
        echo "<td> $gaji </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Pendidikan</td> <td>:</td> <td>$pendidikan</td>";
        echo "</tr>";
        if ($pendidikan == "S1") {
            $tunjangan = 200000;
          } else if ($pendidikan == "SMA") {
            $tunjangan = 1000000;
          } else if ($pendidikan == "SMP") {
            $tunjangan = 500000;
          }
          echo "<tr>";
          echo "<td>Tunjangan  </td>"; 
          echo "<td> : </td>"; 
          echo "<td>$tunjangan</td>";
          echo "</tr>";
          $this->tgaji = $gaji + $tunjangan;
          echo "<tr>";
          echo "<td>Total Gaji</td> <td>:</td> <td>$this->tgaji</td>";
          echo "</tr>";
        echo "<table>";
        echo "<hr>";
       
    }

    public function pengeluaran($listrik, $kontrakan, $kendaraan) {
        echo "<h2><i>Pengeluaran</i></h2>";
        echo "<table>";
        echo "<tr>";
        echo "<td>Bayar Listrik</td> <td>:</td> <td>$listrik</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Bayar Kontrakan</td> <td>:</td> <td>$kontrakan</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Cicilan kendaraan</td> <td>:</td> <td>$kendaraan</td>";
        echo "</tr>";
        echo "<tr>";
        $this->tpengeluaran = $listrik + $kontrakan + $kendaraan; 
        echo "<td>Total Pengeluaran</td> <td>:</td> <td>$this->tpengeluaran</td>";
        echo "</tr>";
        echo "</table>";
        echo "<hr>";
    }
    public function sisa() {
       $sisa = $this->tgaji - $this->tpengeluaran;
       echo "<h2><i>Sisa : $sisa</i><h2>";
       echo "<hr>";
  
  }
   
}

$penggajihan = new penggajihan;
echo $penggajihan->gaji("Manager","SMP");
echo $penggajihan->pengeluaran(200000,1000000,600000);
echo $penggajihan->sisa();

?>