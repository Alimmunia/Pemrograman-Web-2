<?php
require_once "class_persegipanjang.php";
$persegi1 = new PersegiPanjang(20, 30);
echo "Luas dari persegi panjang yang memiliki panjang = ". $persegi1->getpanjang(). " lebar = ". $persegi1->getlebar(). " adalah ". $persegi1->getluas();


?>