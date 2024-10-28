<?php

class Komik extends Produk implements InfoProduk {
    public $jmlhalaman;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $jmlhalaman = 0){
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->jmlhalaman=$jmlhalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}