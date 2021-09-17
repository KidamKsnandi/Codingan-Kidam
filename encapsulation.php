<?php 

    // Class
class manusia {
    // Prop
    // Public
    // public $nama="Kidam Kusnandi";

    // Private
    // private $nama = "Kidam Kusnandi";

    // Protected
    // protected $nama = "Kidam Kusnandi";

    // Method
    protected function nama() {
        return "Nama saya Kidam Kusnandi";
    }

    public function keluarkan() {
        return $this->nama();
    }

    // public function tampilkan_nama() {
    //     return $this->nama;
    // }
}
    // Object
$manusia = new manusia();

echo $manusia->keluarkan();

?>