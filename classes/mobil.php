<?php 
class Mobil extends kendaraan {
    private $jumlahPintu;
    public function __construct($merk, $warna, $jumlahPintu)
    {
        // $this->$merk = $merk;
        // $this->$warna = $warna;
        parent:: __construct($merk, $warna);
        $this->jumlahPintu = $jumlahPintu;
    }
    public function getJumlahPintu(){
        return $this->jumlahPintu;
    }
}
?>