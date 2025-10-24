<?php
// soal nomor 5

// Class induk
class Pegawai
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function tampilkanData()
    {
        echo "Nama Pegawai: " . $this->nama . "<br>";
    }
}

// Class turunan dari Pegawai
class Manajer extends Pegawai
{
    public $departemen;

    public function __construct($nama, $departemen)
    {
        // Memanggil constructor dari class induk
        parent::__construct($nama);
        $this->departemen = $departemen;
    }

    // Method untuk menampilkan data manajer
    public function tampilkanData()
    {
        echo "Nama Manajer: " . $this->nama . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
    }
}

// Membuat objek dari class Pegawai
$pegawai1 = new Pegawai("Nur Ridha Salsabila, HRD");
$pegawai1->tampilkanData();

echo "<br>";
