<!DOCTYPE html>
<html>
<head>
    <title>Skenario 2</title>
</head>
<body> 
    <h1>Skenario 2</h1>
    <p>Waktu </p>
    <p>Pukul 00.00-04.00 = Dini Hari</p>
    <p>Pukul 04.00-10.00 = Pagi hari</p>
    <p>Pukul 10.00-15.00 = Siang</p>
    <p>Pukul 15.00-17.30 = Sore</p>
    <p>Pukul 17.30-18.30 = Petang</p>
    <p>Pukul 18.30-24.00 = Malam</p>
    <p>Kurang dari 00:00 dan lebih dari 24:00 = Dunia lain</p>
</body>
</html>

<?php
$waktu = "18.00";
if ($waktu >= "00.00" && $waktu <= "04.00")
{
    echo "Waktu $waktu = Dini Hari";
} else if ($waktu >= "04.00" && $waktu <= "10.00")
{
    echo "Wakti $waktu = Pagi hari";
} else if ($waktu >= "10.00" && $waktu <= "15.00")
{
    echo "Waktu $waktu = Siang"; 
} else if ($waktu >= "15.00" && $waktu <= "17.30")
{
    echo "Waktu $waktu = Sore";
} else if ($waktu >= "17.30" && $waktu <= "18.30")
{
    echo "Waktu $waktu = Petang";
} else if ($waktu >= "18.30" && $waktu <= "24.00")
{
    echo "Waktu $waktu = Malam";
} else
{
    echo "Waktu $waktu = Dunia lain";
}
?>
