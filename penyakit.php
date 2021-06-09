<?php  

$sumber = "data.json";
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hasil Analisa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script> -->
</head>

<body>
    <h2>Daftar Penyakit</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Penyakit</th>
            <th>Gejala</th>
        </tr>
        <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    print "<td>".$a."</td>";
    // menayangkan 
    print "<td>".$data[$a]['kode']."</td>";
    print "<td>".$data[$a]['penyakit']."</td>";
    print "<td>".$data[$a]['gejala']."</td>";
    print "</tr>";
   }
  ?>
    </table>
</body>

</html>

</html>