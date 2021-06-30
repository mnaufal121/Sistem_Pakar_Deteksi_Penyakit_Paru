<?php

$dgejala = "gejala.json";
$kgejala = file_get_contents($dgejala);
$gejala = json_decode($kgejala, true);

$dpenyakit = "penyakit.json";
$kpenyakit = file_get_contents($dpenyakit);
$penyakit = json_decode($kpenyakit, true);

$dcf = "cf.json";
$kcf = file_get_contents($dcf);
$nilaicf = json_decode($kcf, true);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hasil Analisa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <script src='main.js'></script> -->
</head>

<body>
    <h2>Daftar Gejala</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Gejala</th>
        </tr>
        <?php
        for ($a = 1; $a < (count($gejala) + 1); $a++) {
            print "<tr>";
            // penomeran otomatis
            print "<td>" . $a . "</td>";
            // menayangkan 
            print "<td>" . $gejala[$a - 1]['kode'] . "</td>";
            print "<td>" . $gejala[$a - 1]['gejala'] . "</td>";
            print "</tr>";
        }
        ?>
    </table>

    <h2>Daftar Penyakit</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Penyakit</th>
            <th>Daftar Gejala</th>
        </tr>
        <?php
        for ($a = 1; $a < (count($penyakit) + 1); $a++) {
            print "<tr>";
            // penomeran otomatis
            print "<td>" . $a . "</td>";
            // menayangkan 
            print "<td>" . $penyakit[$a - 1]['kode'] . "</td>";
            print "<td>" . $penyakit[$a - 1]['penyakit'] . "</td>";
            print "<td>" . $penyakit[$a - 1]['gejala'] . "</td>";
            print "</tr>";
        }
        ?>
    </table>
    <h2>Nilai Pakar</h2>
    <table>
        <tr>
            <th>Gejala\Penyakit</th>
            <th>P1</th>
            <th>P2</th>
            <th>P3</th>
        </tr>
        <?php
        $b = 'G';
        for ($a = 0; $a < count($nilaicf); $a++) {
            print "<tr>";
            // penomeran otomatis
            print "<td>" . $b . ($a + 1) . "</td>";
            // menayangkan 
            print "<td>" . $nilaicf[$a]['p1'] . "</td>";
            print "<td>" . $nilaicf[$a]['p2'] . "</td>";
            print "<td>" . $nilaicf[$a]['p3'] . "</td>";
            print "</tr>";
        }
        ?>
    </table>
</body>

</html>

</html>