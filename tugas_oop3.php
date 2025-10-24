<?php
//nomor 3
class Mahasiswa
{
    public $nama;
    public $nim;
    public $semester;
    public $no_hp;

    public function __construct($name, $nim, $smt, $nomor)
    {
        $this->nama = $name;
        $this->nim = $nim;
        $this->semester = $smt;
        $this->no_hp = $nomor;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function getSemester()
    {
        return $this->semester;
    }
    public function getNomor()
    {
        return $this->no_hp;
    }
}
$mahasiswa1 = new Mahasiswa('salca<br>', '9968574<br>', '2<br>', 845321697);

echo "nama: " . $mahasiswa1->getNama();
echo "nim: " . $mahasiswa1->getNim();
echo "semester: " . $mahasiswa1->getSemester();
echo "nomor: " . $mahasiswa1->getNomor();
?>