<?php
require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi", "Shonen", 30000, 100);
$produk2 = new Game("Uncharted", "Neil", "Sony", 20000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();