<?php
//nomor 2 
class Lingkaran
{
    public $jari2;

    public function luas()
    {
        return 3.14 * $this->jari2 * $this->jari2;
    }
}

$lingkaran1 = new lingkaran();
$lingkaran1->jari2 = 7;
echo "nilai dari luas lingkaran adalah " . $lingkaran1->luas();
?>