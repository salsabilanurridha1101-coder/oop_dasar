<?php 
class Mahasiswa
{
    public $nama;
    public $umur;
    public function setNama ($name){
        $this -> nama = $name;
    }
    public function getNama(){
        return $this->nama;
    }
    public function setUmur($usia){
       $this->umur = $usia; 
    }
    public function getUmur ()
    {
        return $this->umur;
    }
}
 $mhs1 = new Mahasiswa();
 $mhs1 ->setNama('bunny');
 $mhs1 ->setUmur(18);

 echo $mhs1 ->getNama();
 echo "<br>";
 echo $mhs1->getUmur();
?>