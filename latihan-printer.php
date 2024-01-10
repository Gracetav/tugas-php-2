<?php

$namaBarang = "Printer Epson";
$kodeBarang = "P001";
$kategori = "Elektronik";
$hargaBarang = 150000; 
$jumlahBarang = 3;
$status = "Proses";

$totalHarga = $hargaBarang * $jumlahBarang;


if ($hargaBarang > 100000) {
    $diskon = 50000;
    $totalHarga -= $diskon;
} else {
    $diskon = 0;
}


echo "==== Program Menghitung Pembelian Produk ====\n<br/>";
echo "Nama Barang : $namaBarang\n<br/>";
echo "Kode Barang : $kodeBarang\n<br/>";
echo "Kategori : $kategori\n<br/>";
echo "Harga Barang : Rp " . number_format($hargaBarang, 0, ',', '.') . "\n<br/>";
echo "Jumlah Barang : $jumlahBarang\n";
echo "Total Harga : Rp " . number_format($totalHarga, 0, ',', '.') . "\n<br/>";
echo "Status : $status\n<br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wrna</title>
    <style>
        .status{
            color: green;
        }
    </style>
</head>
<body>
    
</body>
</html>