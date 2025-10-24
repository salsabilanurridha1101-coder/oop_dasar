<?php
// SOAL NOMOR 8

// Membuat class Utilitas
class Utilitas
{
    // Method static dapat dipanggil tanpa membuat objek
    public static function halo()
    {
        echo "Hello world";
    }
}

echo "<br>";

// Memanggil method static tanpa membuat objek
Utilitas::halo();
?>