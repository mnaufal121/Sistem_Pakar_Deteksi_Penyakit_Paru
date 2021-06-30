<?php
$data [] = array(
    'kode' => 'G1',
    'gejala' => 'Batuk'
);

$data [] = array(
    'kode' => 'G2',
    'gejala' => 'Demam'
);

$data [] = array(
    'kode' => 'G3',
    'gejala' => 'Sesak Napas'
);

$data [] = array(
    'kode' => 'G4',
    'gejala' => 'Pilek'
);

$data [] = array(
    'kode' => 'G5',
    'gejala' => 'Mengi'
);

$data [] = array(
    'kode' => 'G6',
    'gejala' => 'Napas Cepat'
);

$data [] = array(
    'kode' => 'G7',
    'gejala' => 'Diare'
);

$data [] = array(
    'kode' => 'G8',
    'gejala' => 'Muka Kemerahan'
);

$data [] = array(
    'kode' => 'G9',
    'gejala' => 'Suara Kering'
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$buatfile=file_put_contents('gejala.json', $jsonfile);

if($buatfile){
    echo "Berhasil";
}
?>