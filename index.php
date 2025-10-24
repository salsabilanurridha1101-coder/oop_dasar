<?php
require_once  "koneksi.php";
require_once  "classes/mobil.php";
require_once  "classes/motor.php";

if(isset ($_POST['simpan'])){
    $jenis =$_POST['jenis'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];

    if($jenis === "Mobil"){
        $jumlah_pintu = $_POST['jumlah_pintu'];
        $mobil = new Mobil ($merk,$warna,$jumlah_pintu);
        $merkMobil = $mobil->getMerk();
        $warnaMobil = $mobil ->getWarna();
        $jumlah_pintu = $mobil->getJumlahPintu();
        $insert = mysqli_query($koneksi, "INSERT INTO kendaraan (jenis,merk,warna,jumlah_pintu) VALUES ('$jenis', '$merkMobil', '$warnaMobil', '$jumlah_pintu')");
    } else {
        $jenis_motor =$_POST['jenis_motor'];
        $motor = new Motor ($$merk,$warna,$jenis_motor);
        $merkMotor = $motor->getMerk();
        $warnaMotor = $motor->getWarna();
        $jenis_motor = $motor->getjenisMotor();
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Input Kendaraan</h2>
    <form action="" method="post">
        <label for="">Jenis</label><br>
        <select name="jenis" onchange="cariJenis(this.value)">
            <option value="">--Pilih Jenis--</option>
            <option value="Mobil">Mobil</option>
            <option value="Motor">Motor</option>
        </select><br><br>
        <label>Merk: </label>
        <input type="merk" required><br><br>
        <label>Warna: </label>
        <input type="warna" required><br><br>
        <div id="mobilInput" style="display:none;">
            <label>Jumlah Pintu: </label><br>
            <input type="text" name="jumlah_pintu"><br><br>
        </div>
        <div id="motorInput" style="display:none">
            <label>Jenis Motor: </label><br>
            <input type="text" name="jenis_motor" ><br><br>
        </div>
        <button type="submit" name="simpan">simpan</button>
    </form>
    <script>
        function cariJenis(value) {
            document.querySelector('#mobilInput').style.display = value === "Mobil" ? 'block' : 'none';
            document.querySelector('#motorInput').style.display = value === "Motor" ? 'block' : 'none';

        }
    </script>
</body>

</html>