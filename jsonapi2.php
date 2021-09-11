<?php

$url = "https://api.kawalcorona.com/indonesia/provinsi/";
//persiapan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // Untuk mengembalikan respon data string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // simpan konten dalam variabel $dataCovid
    $dataCovid = curl_exec($ch);
    // cURL 
    curl_close($ch);
    // menampilkan hasil curl
    // echo output
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1><i>Data Covid-19</i></h1>
        <h4><i>Di indonesia berdasarkan provinsi</i></h4>
        <table border="1">
           <tr>
              <th>Kode Provinsi</th>
              <th>Provinsi</th>
              <th>Jumlah Positif</th>
              <th>Jumlah Sembuh</th>
              <th>Jumlah Meninggal</th>
            </tr>
            <?php 
            $data = json_decode($dataCovid);
            foreach ($data as $covid) {
            ?>
            <tr>
                <td align="center"><?= $covid->attributes->Kode_Provi; ?></td>
                <td><?= $covid->attributes->Provinsi; ?></td>
                <td><?php $positif = number_format($covid->attributes->Kasus_Posi);
                       echo $positif; ?></td>
                <td><?php $sembuh = number_format($covid->attributes->Kasus_Semb);
                       echo $sembuh; ?></td>
                <td><?php $meninggal = number_format($covid->attributes->Kasus_Meni);
                       echo $meninggal; ?></td>
            </tr>
             <?php    
            }
            ?>
        </table>
    </center>
</body>
</html>