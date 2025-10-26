<?php

require_once "kendaraan.php";
class Mobil extends kendaraan
{
    private $jumlahPintu;

    public function __construct($merk, $warna, $jumlahPintu)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->jumlahPintu = $jumlahPintu;
    }

    public function jmlhpintu()
    {
        return $this->jumlahPintu;
    }
}