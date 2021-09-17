<?php 

class manusia {
    protected $teman = "Wahyu";
    protected function berinama() {
        echo "Nama saya Kidam <br>";
    }
}

class teman extends manusia {
    protected function berinamateman() {
        echo "Nama teman saya Diki <br>";
    }

}
    class teman1 extends teman {
        public function berinamateman1(){
            echo $this->berinama();
            echo $this->berinamateman();
            echo "Nama teman saya saya $this->teman";
        }
}
$hasil = new teman1();

$hasil->berinamateman1(); 

?>