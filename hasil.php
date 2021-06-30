<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hasil Analisa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Hasil Diagnosa Sistem</h1>
    <h2>Data Diri</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>
                <?php
                echo $_POST['nama'];
                ?>
            </th>
        </tr>
        <tr>
            <th>Usia</th>
            <th>
                <?php
                echo $_POST['umur'];
                ?>
            </th>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th>
                <?php
                echo $_POST['kelamin'];
                ?>
            </th>
        </tr>
    </table>
    <h2>Hasil Analisa</h2>
    <table>
        <tr>
            <th>Penyakit</th>
            <th></th>
        </tr>
        <tr>
            <th>Gejala</th>
            <th></th>
        </tr>
        <tr>
            <th>Persentase Keyakinan</th>
            <th></th>
        </tr>
        <tr>
            <th>Saran atau Tindakan yang perlu dilakukan</th>
            <th></th>
        </tr>
    </table>
    <button onclick="toAnalisa()" type="button">Ulangi Diagnosa?</button>
    <button type="button">Cetak PDF</button>
    <script src="pindah.js"></script>
</body>

</html>

</html>