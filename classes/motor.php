<?php 
class Motor extends kendaraan {
    private $jumlahMotor;
    public function __construct($merk, $warna, $jumlahMotor)
    {
        // $this->$merk = $merk;
        // $this->$warna = $warna;
        parent:: __construct($merk, $warna);
        $this->jumlahMotor = $jumlahMotor;
    }
    public function getJumlahMotor(){
        return $this->jumlahMotor;
    }
}
?>