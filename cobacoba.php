<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
    <h2> Nama anggota : 
    <br>1. Jasmine Elvarita S.
    <br>2. Zaskia Vadya A. Y. 
    </h2>
</head>

<h2> Kasus 1 </h2>
<?php
// Array hari, tanggal, bulan, dan tahun
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = range(1, 31);
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agt", "Sep", "Okt", "Nov", "Des"];
$tahun = [2024, 2025, 2026];

// Menampilkan hari dengan for
echo "Hari: ";
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i] . " ";
}
echo "<br>";

// Menampilkan tanggal dengan foreach
echo "Tanggal: ";
foreach ($tanggal as $tgl) {
    echo $tgl . " ";
}
echo "<br>";

// Menampilkan bulan dengan while
echo "Bulan: ";
$i = 0;
while ($i < count($bulan)) {
    echo $bulan[$i] . " ";
    $i++;
}
echo "<br>";

// Menampilkan tahun dengan do while
echo "Tahun: ";
$i = 0;
do {
    echo $tahun[$i] . " ";
    $i++;
} while ($i < count($tahun));
echo "<br>";

// Menentukan hari dari tanggal 10 Maret 2025
$timestamp = strtotime("10 March 2025");
$hariIndex = date("w", $timestamp); // Mendapatkan indeks hari (0 = Minggu, 1 = Senin, dst.)
$hariTerpilih = $hari[$hariIndex];

// Menampilkan hasil sesuai format yang diminta
echo "$hariTerpilih, 10 Mar 2025";
echo "<br>";
?>

<h2> Kasus 2 </h2>
<?php
//kasus 2
for ($i = 30; $i > 0; $i--) {
    echo "Anak ayam turun $i, mati satu tinggal " . ($i - 1) . "<br>";
}
 echo '<br>';
?>
<h2> kasus 3 </h2>
<?php
//kasus 3
// Mawar yang dimiliki Sholeh
$jumlahMawarSholeh = 0;
echo "Mawar yang dimiliki Sholeh:\n";
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar ";
    $jumlahMawarSholeh++; // Menghitung jumlah mawar
}
echo "<br> Total Mawar yang dimiliki Sholeh: $jumlahMawarSholeh<br>";

// Mawar yang diberikan ke ibunya
$jumlahMawarDiberikan = 0;
echo "Mawar yang diberikan ke ibunya:";
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "$mawar ";
    $jumlahMawarDiberikan++; // Menghitung jumlah mawar yang diberikan
}
echo "<br>Total Mawar yang diberikan ke ibunya: $jumlahMawarDiberikan<br>";
?>
<h2> kasus 4 </h2>
<?php
//kasus 4
$musik = [
    "galau" => ["Mesin Waktu - Budi Doremi"],
    "bersemangat" => ["Selamat Pagi - Ran"],
    "marah" => ["Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];

foreach ($musik as $suasana => $lagu) {
    echo "Saat $suasana, Ambyar mendengarkan: " . implode(", ", $lagu) . "<br>";
}

?>
</html>