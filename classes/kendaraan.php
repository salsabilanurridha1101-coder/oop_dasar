<?php
class kendaraan
{
    protected $warna, $merk;

    public function __construct($merk, $warna)
    {

        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function getWarna()
    {
        return $this->warna;
    }
}