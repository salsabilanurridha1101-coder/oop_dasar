<?php
// SOAL NOMOR 7


// Class Laptop
class Laptop
{
    // Properti private hanya bisa diakses lewat setter & getter
    private $merk;

    // Setter → untuk mengatur nilai properti private
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    // Getter → untuk mengambil nilai properti private
    public function getMerk()
    {
        return $this->merk;
    }
}

// Membuat objek dari class Laptop
$laptop1 = new Laptop();

// Mengatur nilai properti menggunakan setter
$laptop1->setMerk("HP");

// Menampilkan nilai properti menggunakan getter
echo "Merk Laptop: " . $laptop1->getMerk();