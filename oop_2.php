<?php 
class Mahasiswa_1
{
    public $nama;
    public $umur;
    public function __construct($name, $usia)
    {
        $this -> nama = $name;
        $this -> umur = $usia;
    }
    public function getNama()
    {
        return $this->nama;
    }
    // public function setUmur($usia)
    // {
    //    $this->umur = $usia; 
    // }
    public function getUmur ()
    {
        return $this->umur;
    }
}
 $mhs1 = new Mahasiswa_1('salca<br>', 23);

 echo $mhs1 ->getNama();
 echo $mhs1->getUmur();
?>