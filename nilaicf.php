<?php  

$sumber = "cf.json";
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
    <h2>Nilai Pakar</h2>
    <table>
        <tr>
            <th>Gejala</th>
            <th>P1</th>
            <th>P2</th>
            <th>P3</th>
        </tr>
        <?php   
   for($a=0; $a < count($data); $a++)
   {
    print "<tr>";
    // penomeran otomatis
    print "<td>".$a."</td>";
    // menayangkan 
    print "<td>".$data[$a]['p1']."</td>";
    print "<td>".$data[$a]['p2']."</td>";
    print "<td>".$data[$a]['p3']."</td>";
    print "</tr>";
   }
  ?>
    </table>
</body>

</html>

</html>