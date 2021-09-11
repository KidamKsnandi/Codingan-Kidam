<!DOCTYPE html>
<html>
 <head>
   <title>Form Biodata Diri</title>
 </head>

 <body>
 <h2>Form Biodata Diri</h2>
   <form action="hasil.php" method= "POST" >
   <table>
      <tr>
        <td>Nama</td> 
        <td>:</td> 
        <td><input type = "text" name = "nama"  required></td> 
      </tr>
      <tr>
        <td>Tempat Lahir</td> 
        <td>:</td> 
        <td><input type = "text" name = "tl"  required></td> 
      </tr>
      <tr>
        <td>Tanggal Lahir</td> 
        <td>:</td> 
        <td><input type = "date" name = "ttl"  required></td> 
      </tr>
      <tr>
        <td>Jenis Kelamin</td> 
        <td>:</td> 
        <td><input type = "Radio" name = "jk" value = "Laki-laki"  required> Laki-Laki
            <input type = "Radio" name = "jk" value = "Perempuan"> Perempuan </td> 
      </tr> 
      <tr>
        <td>Alamat</td> 
        <td>:</td> 
       <td><textarea name = "alamat"  required></textarea></td> 
      </tr>
      <tr>
        <td>Agama</td> 
        <td>:</td> 
        <td><select name = "agama"  required>
             <option value = "Islam">Islam</option>
             <option value = "Kristen">Kristen</option>
             <option value = "Hindu">Hindu</option>
             <option value = "Buddha">Buddha</option>
            </select></td> 
      </tr>
      <tr>
        <td>Pendidikan Terakhir</td> 
        <td>:</td> 
        <td><select name = "pt"  required>
             <option value = "SD">SD</option>
             <option value = "SMP">SMP</option>
             <option value = "SMA">SMA</option>
             <option value = "SMK">SMK</option>
            </select></td>
      </tr>
      <tr>
        <td>Status</td> 
        <td>:</td> 
        <td><select name = "status"  required   >
             <option value = "Pelajar">Pelajar</option>
             <option value = "Mahasiswa">Mahasiswa</option>
             <option value = "Menikah">Menikah</option>
             <option value = "Yang lain">Yang lain</option>
            </select></td> 
      </tr>
      <tr>
        <td>Hobi</td> 
        <td>:</td> 
        <td><input type = "checkbox" name = "hobi[]" value = "Bulutangkis" required>Bulutangkis
            <input type = "checkbox" name = "hobi[]" value = "Sepak bola">Sepak Bola
            <input type = "checkbox" name = "hobi[]" value = "Nonton">Nonton
            <input type = "checkbox" name = "hobi[]" value = "Rebahan">Rebahan</td> 
      </tr>
      <tr>
        <td>Cita-Cita</td> 
        <td>:</td> 
        <td><select name = "citacita"  required>
             <option value = "Programmer">Programmer</option>
             <option value = "Polisi">Polisi</option>
             <option value = "Pilot">Pilot</option>
             <option value = "Guru">Guru</option>
             <option value = "Youtuber">Youtuber</option>
            </select></td> 
      </tr>
      <tr>
        <td>Kata-kata bijak</td> 
        <td>:</td> 
        <td><textarea name = "kkb"  required></textarea></td> 
      </tr>
      <tr>
       <td><td>   
       <td><input type = "submit" name = "simpan" value = "KIRIM"><td>
      </tr>
   </table>
   </form>
 </body>
</html>
