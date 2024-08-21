<?php
class kendaraan {
    var $merk;
    var $model;
    var $tahun;
    var $warna;

    function __construct($merk, $model, $tahun, $warna) {
        $this->merk = $merk;
        $this->model = $model;
        $this->tahun = $tahun;
        $this->warna = $warna;
    }

    function getDeskripsi() {
        return "merk: " . $this->merk . ", model: " . $this->model . ", tahun: " . $this->tahun . ", warna: " . $this->warna;
    }

}

// objek
$kendaraan1 = new kendaraan("Yamaha Aerox"," Cyber City", 2023, "Hitam");
//tampilkan
echo $kendaraan1->getDeskripsi() . "\n";
//objek
$kendaraan2 = new Kendaraan("Honda", "Kawasaki", 2020, "putih")
//tampilkan
echo $kendaraan2->getDeskripsi() . "\n";
?>