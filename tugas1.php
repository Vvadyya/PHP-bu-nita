<!DOCTYPE html>
<html>
<head>
    <title>Skenario 1</title>
</head>
<body> 
    <h1>Skenario 1</h1>
    <p>Nilai</p>
    <p>Nilai 100 = A</p>
    <p>Nilai 80-89 = B</p>
    <p>Nilai 70-79 = C</p>
    <p>Nilai 0-69 = D</p>
    <p>Nilai harus diantara 0-100</p>
</body>
</html>
<?php
$nilai= 86;

if($nilai >= 90 && $nilai <= 100)
{
    echo "Nilai $nilai =A";
} else if($nilai >= 80 && $nilai <= 89)
{ 
    echo "Nilai $nilai =B";
} else if($nilai >= 70 && $nilai <= 79)
{
    echo "Nilai $nilai =C";
} else if($nilai >= 0 && $nilai <= 69)
{
    echo "Nilai $nilai =D";
} else { 
    echo "Nilai wajib diantara 0-100";
}
?>


