<?php 
 
    $artikel = [
        ["Judul"=>"Belajar PHP & MySQL untuk Pemula", 
         "Penulis"=>"petanikode"],
        ["Judul"=>"Tutorial PHP dari Nol hingga Mahir",
        "Penulis"=>"dunia ilkom"],
        ["Judul"=>"Membuat Aplikasi Web dengan PHP",
        "Penulis"=>"jago koding"],
        ["Judul"=>"Tutorial Belajar Android",
        "Penulis"=>"programmer"],
        ["Judul"=>"Tutorial belajar mikrotik",
        "Penulis"=>"dunia cyber"],
        
    ];

    echo $artikel[2]["Judul"]." : ".$artikel[2]["Penulis"]."<br>";
    echo $artikel[3]["Judul"]." : ".$artikel[3]["Penulis"];

?>