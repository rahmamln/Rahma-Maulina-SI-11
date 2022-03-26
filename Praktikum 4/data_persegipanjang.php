<?php
require_once 'class_persegipanjang.php';
echo "Menghitung luas dan keliling persegi panjang";
$persegipanjangsatu = new persegipanjang(5,6);
$persegipanjangdua = new persegipanjang(4,3);

echo "<br>Luas Persegi Panjang 1 = " .$persegipanjangsatu->getLuas();
echo "<br>Luas Persegi Panjang 2 = " .$persegipanjangdua->getLuas();

echo "<br>Keliling Persegi Panjang 1 = " .$persegipanjangsatu->getKeliling();
echo "<br>Keliling Persegi Panjang 2 = " .$persegipanjangdua->getKeliling();
?>