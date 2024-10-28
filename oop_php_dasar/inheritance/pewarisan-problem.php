<?php

//Produk
//Komik
//Game

class Produk {

    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlhalaman,
            $waktumain,
            $tipe;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe = "tipe"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktumain = $waktumain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlhalaman} Halaman.";
        } else if ( $this->tipe == "Game"){
            $str .= " - {$this->waktumain} Jam.";
        } 
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi", "Shonen", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil", "Sony", 20000, 0, 50, "Game");



echo $produk1->getInfoLengkap();
echo "<br> ";
echo $produk2->getInfoLengkap();


?>