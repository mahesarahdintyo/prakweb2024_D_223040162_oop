<?php

class Game extends Produk implements InfoProduk  {
    public $waktumain;
    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $waktumain = 0){
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->waktumain=$waktumain;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : " . $this->getInfo() . " - {$this->waktumain} Jam.";
        return $str;
    }
}