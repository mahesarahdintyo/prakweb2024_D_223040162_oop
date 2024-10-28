<?php
//Produk
//Komik
//Game

class Produk {

    public $judul,
            $penulis,
            $penerbit,
            $harga;
            
    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk {
    public $jmlhalaman;

    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $jmlhalaman = 0){
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->jmlhalaman=$jmlhalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktumain;
    public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0, $waktumain = 0){
        parent::__construct($judul, $penerbit, $penulis, $harga);
        $this->waktumain=$waktumain;
    }
    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " - {$this->waktumain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi", "Shonen", 30000, 100);
$produk2 = new Game("Uncharted", "Neil", "Sony", 20000, 50);



echo $produk1->getInfoProduk();
echo "<br> ";
echo $produk2->getInfoProduk();


?>