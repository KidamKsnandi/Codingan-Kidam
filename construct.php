<?php 

class manusia {
    function __construct($nama) {
        echo "Nama saya $nama";
    }

    function nama() {
        return "Nama saya Kidam Kusnandi </br>";
    } 
    function kelas() {
        return "Kelas XII RPL 2 </br>";
    }
    function hobi() {
        return "Hobi saya bulutangkis";
    }

    function tampilkan_biodata() {
        return $this->nama().$this->kelas().$this->hobi();
    }
    
}

$manusia = new manusia("Kidam Kusnandi");


?>