<?php
 // jika senin-selasa-rabu, maka menggunakan seragam osis
 // jika kamis, maka menggunakan seragam kamis
 // jika jumat, maka menggunakan seragam olahraga
 // jika sabtu, maka menggunakan seragam pramuka

 $hari = "selasa";
 if($hari == "senin"|| $hari == "selasa"|| $hari == "rabu")
{ 
    echo $hari "menggunakan seragam osis";
} else if($hari == "kamis")
{
    echo $hari "menggunakan seragam batik";
} else if($hari == "jumat")
{
    echo $hari "menggunakan seragam olahraga";
} else if($hari == "sabtu")
{
    echo $hari "menggunakan seragam pramuka";
} else if($hari == "minggu")
{
    echo $hari "libur";
} else
{
    echo "hari tidak valid";
}
?> 
