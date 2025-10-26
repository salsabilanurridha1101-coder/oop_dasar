<?php
require_once "kendaraan.php";
class Motor extends kendaraan
{
    private $jenisMotor;

    public function __construct($merk, $warna, $jenisMotor)
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->jenisMotor = $jenisMotor;
    }

    public function getJenisMotor()
    {
        return $this->jenisMotor;
    }
}