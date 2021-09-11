<!DOCTYPE html>
<html>
 <head>
   <title>Form Input</title>
 </head>

 <body>
 <h2>Switch Case</h2>
   <form action="" method= "POST" >
   <table>
      <tr>
        <td>Masukkan Angka</td> 
        <td>:</td> 
        <td><input type = "text" name = "angka"  required></td> 
      </tr>
      <tr>
       <td><td>   
       <td><input type = "submit" name = "simpan" value = "KIRIM"><td>
      </tr>
   </table>
   </form>
 </body>
</html>

<?php
   if(isset($_POST['simpan'])) {
       $angka = $_POST['angka'];
       switch($angka) {
           case 1:
            echo "Isi variabel angka adalah satu";
            break;
           case 2:
            echo "Isi variabel angka adalah dua";
            break;
            case 3:
            echo "Isi variabel angka adalah tiga";
            break;
            case 4:
            echo "Isi variabel angka adalah empat";
            break;
            case 5:
            echo "Isi variabel angka adalah lima";
            break;
            case 6:
            echo "Isi variabel angka adalah enam";
            break;
            default:
             echo "Isi variabel tidak di temukan";        
       }
   }
?>