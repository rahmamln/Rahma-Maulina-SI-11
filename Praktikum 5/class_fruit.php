<?php
class fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna)
    {
        $this->name= $name;
        $this->warna= $warna;
    }
    public function intro(){
        echo "<br/> Nama Aku adalah {$this->name} dan warna aku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{
    public function message(){
        echo "<br/>Aku adalah sebuah Strawberry atau Pisang";
    }
}
$buah = new Strawberry("Strawberry", "Merah");
$buah->intro();
$buah->message();
?>