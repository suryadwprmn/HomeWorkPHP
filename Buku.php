<?php
// Surya Dwi Pramana
// I do my work be honest, no ChatGPT
class Buku{
    private $judul;
    private $tahun;
    private $jumlah_hal;
    private $bahan_material;
    private $diskon;

   public function __construct($judul,$tahun,$jumlah_hal,$bahan_material,$diskon){
    $this -> judul = $judul;
    $this -> tahun = $tahun;
    $this -> jumlah_hal = $jumlah_hal;
    $this -> bahan_material = $bahan_material;
    $this -> diskon = $diskon;

   }
    
   
    public function get_judul(){
         return $this -> judul;
    }
 
    public function get_tahun(){
         return $this -> tahun;
    }
  
    public function get_jumlahhal(){
         return $this -> jumlah_hal;
    }
  
    public function get_bahan(){
         return $this -> bahan_material;
    }
    public function get_diskon(){
        return $this -> diskon * $this->get_harga();
   }

   
   public $harga;
   public function set_harga($harga = 10000){
        $this -> harga =$harga;
   }
   public function get_harga(){
    return $this -> harga;
   }
   
    if($tahun < 5 && $jumlah_hal < 100){
        return $this->get_harga * 10; 
    } elseif ($tahun < 5 && $jumlah_hal > 500){
        return $this -> get_harga *50;
    } elseif ($tahun < 5 && $tahun $jumlah_hal > 100){
        return $this -> get_harga * 30;
    } elseif($tahun > 5 && $tahun < 10 && $jumlah_hal < 100){
        return $this -> get_harga *5;
    } elseif ( $tahun > 5 && $tahun < 10 && $jumlah_hal > 500){
        return $this -> get_harga * 25;
    } elseif ( $tahun > 5 && $tahun < 10 && $jumlah_hal > 100 && $jumlah_hal < 500){
        return $this -> get_harga * 15;
    }else {
        return $this -> get_harga;
    }
   

}

class Komik extends Buku{
    private $isColorful;
    private function __construct($judul,$tahun,$isColorful) {
        $this -> judul = $judul;
        $this -> isColorful = $isColorful;
    }
    private static function Cetak(){
        return "{$this->judul}"
    }

}

$Buku1 = new Komik("Calculus",)
?>