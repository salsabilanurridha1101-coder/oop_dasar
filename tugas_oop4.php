<?php
// Class MataKuliah
class MataKuliah
{
    public $nama;
}

// Class Dosen
class Dosen
{
    public $nama;
    public $alamat;
    public $matkul; // object dari class MataKuliah
}

// Membuat objek MataKuliah
$matkul1 = new MataKuliah();
$matkul1->nama = "web proggramming";

// Membuat objek Dosen
$dosen1 = new Dosen();
$dosen1->nama = "Nur Ridha Salsabila";
$dosen1->alamat = "Bandung";
$dosen1->matkul = $matkul1; // Hubungkan dosen dengan mata kuliah
echo "<br>";
// Tampilkan data
echo "Nama Dosen: " . $dosen1->nama . "<br>";
echo "Mata Kuliah: " . $dosen1->matkul->nama . "<br>";

echo "<br>";
