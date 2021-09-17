<?php 

class manusia {
    function __destruct() {
        echo "Ini adalah method DESTRUCT";
    }

    function nama() {
        return "Nama saya Kidam Kusnandi </br>";
    }

    function __construct() {
        echo "Ini adalah method CONSTRUCT </br>";
    }
    
}

$manusia = new manusia();

echo $manusia->nama();

?>