<?php
// Class induk Produk
class Produk
{
    public $nama;
    protected $harga;
    private $stock;

    // Constructor untuk mengisi data
    public function __construct($nama, $harga, $stock)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;
    }

    // Method untuk menampilkan data dari dalam class
    public function tampilkanProduk()
    {
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: " . $this->harga . "<br>";
        echo "Stock: " . $this->stock . "<br><br>";
    }
}

// Class turunan dari Produk
class Elektronik extends Produk
{
    public function tampilkanElektronik()
    {
        // Bisa akses public dan protected, tapi tidak bisa akses private
        echo "Nama Elektronik: " . $this->nama . "<br>";
        echo "Harga Elektronik: " . $this->harga . "<br>";
        // echo $this->stock; // ❌ Tidak bisa diakses (private)
        echo "(Property 'stock' tidak bisa diakses karena bersifat private)<br><br>";
    }
}

// Membuat objek dari class Produk
$produk1 = new Produk("Laptop", 4520000, 40);
$produk1->tampilkanProduk();

// Membuat objek dari class Elektronik
$elektronik1 = new Elektronik("Televisi", 7800000, 3);
$elektronik1->tampilkanElektronik();