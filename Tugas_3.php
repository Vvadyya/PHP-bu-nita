<html>
<head>
    <title>
        Skenario Ketiga
    </title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            text-align: center;
            font-size: 24px;
        }

        table {
            border: 1px solid black;
            font-size: 12px;
        }

        th, td {
            border: 1px solid black;
            padding: 4px;
        }

        .member, li, p {
            font-size: 12px
        }

        p {
            margin-top: 0;
        }

        input {
            border: 1px solid black;
            border-radius: 4px;
            display: flex;
        }

        label {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <h1>Jadwal Harian Andi</h1>

    <table>
        <tr>
            <th>No.</th>
            <th>Kegiatan</th>
            <th>Jam</th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Pulang Sekolah</td>
            <td>15:30 - 15:45</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Mandi</td>
            <td>15:45 - 16:00</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Mengerjakan Tugas</td>
            <td>16:00 - 18:00</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Membeli bumbu masakan</td>
            <td>18:00 - 18:10</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Makan malam</td>
            <td>18:30 - 19:00</td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Mengaji</td>
            <td>19:00 - 19:30</td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Menghafalkan dialog untuk festival seni budaya</td>
            <td>19:30 - 20:00</td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Chatting dengan Raya</td>
            <td>20:00 - 20:30</td>
        </tr>
        <tr>
            <td>9.</td>
            <td>Mengobrol bersama keluarga</td>
            <td>20:30 - 21:00</td>
        </tr>
            <td>10.</td>
            <td>Tidur</td>
            <td>22:00</td>
        </tr>
            <td>11.</td>
            <td>Bangun tidur</td>
            <td>04:00</td>
        </tr>
    </table>
    <br>
    <?php
        $jadwal = "18:20";

        if ($jadwal >= date("15:30") && $jadwal <= date("15:45")) {
            echo "$jadwal : Andi pulang sekolah";
        } else if ($jadwal >= date("15:45") && $jadwal <= date("16:00")) {
            echo "$jadwal : Mandi";
        } else if ($jadwal >= date("16:00") && $jadwal <= date("18:00")) {
            echo "$jadwal : Mengerjakan tugas";
        } else if ($jadwal >= date("18:00") && $jadwal <= date("18:10")) {
            echo "$jadwal : Membeli bumbu masakan";
        } else if ($jadwal >= date("18:20") && $jadwal <= date("19:00")) {
            echo "$jadwal : Makan malam";
        } else if ($jadwal >= date("19:00") && $jadwal <= date("19:30")) {
            echo "$jadwal : Mengaji";
        } else if ($jadwal >= date("19:30") && $jadwal <= date("20:00")) {
            echo "$jadwal : Menghafalkan dialog untuk festival seni budaya";
        } else if ($jadwal >= date("20:00") && $jadwal <= date("20:30")) {
            echo "$jadwal : Chatting dengan Raya";
        } else if ($jadwal >= date("20:30") && $jadwal <= date("21:00")) {
            echo "$jadwal : Mengobrol bersama keluarga";
        } else if ($jadwal >= date("22:00") && $jadwal <= date("03:59")) {
            echo "$jadwal : tidur";
        } else if ($jadwal >= date("04:00")) {
            echo "$jadwal : bangun";
        } else {
            echo "$jadwal waktu bebas";
        }
        
        ?>
        
        <br>
        <h3>Bahan Diskusi</h3>
        <p class="member">Anggota:
            <br>Fahrunnisa Kusumawardani (14)
            <br>Zaskia Vadya Arminati Yoana (36)
        </p>
        <ol>
            <li>Apa yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau terlewatkan?</li>
            <p>Yang perlu diperhatikan saat menentukan jadwal Andi, sehingga tidak ada jadwal yang bertumbuk atau bertabrakan adalah <br>
                dengan memprioritaskan kegiatan Andi yang lebih penting sehingga tidak membuat jadwalnya bertumpuk dan memberikan waktu yang fleksibel agar Andi masih memiliki waktu untuk mengerjakan tugas yang terlewatkan</p>

            <li>Jelaskan alasanmu dalam menentukan urutan kegiatan tersebut!</li>
            <p>Alasan kami dalam menentukan urutan kegiatan tersebut ialah agar Andi dapat menyelesaikan tugas-tugas dengan menyesuaikan prioritasnya dan bisa memiliki waktu luang lebih untuk dirinya sendiri </p>

            <li>Jam berapa Andi dan Raya melakukan chatting waktu lokal rumah Raya?</li>
            <p>Andi dan Raya melakukan chatting pada pukul 00:00 waktu Arab</p>

            <li>Apakah masih ada waktu untuk Andi memiliki waktu luang? Jam berapakah?</li>
            <p>Masih, Andi masih memiliki waktu luang. Pada jam 18:10-18:30 dan jam 21:00-22:00, jadi Andi memiliki waktu luang sebanyak 1 jam 20 menit.</p>

            <li>Jika Andi tidak memiliki tugas sekolah, berapakah waktu luang yang Andi miliki?</li>
            <p>Jika Andi tidak memiliki tugas sekolah, maka waktu luang yang Andi miliki adalah 3 jam 20 menit</p>
        </ol>

</body>
</html>