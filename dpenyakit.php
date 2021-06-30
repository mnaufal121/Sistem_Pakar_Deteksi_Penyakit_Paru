<?php
$data [] = array(
    'kode' => 'P1',
    'penyakit' => 'Bronkitis',
    'gejala' => 'Batuk, Pilek, Sesak Napas'
);

$data [] = array(
    'kode' => 'P2',
    'penyakit' => 'Bronkopneumonia',
    'gejala' => 'Sesak Napas, Napas Cepat, Demam, Diare'
);

$data [] = array(
    'kode' => 'P3',
    'penyakit' => 'Pertusis Spasmodik',
    'gejala' => 'Batuk, Mengi, Suara Kering, Muka Kemerahan'
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$buatfile=file_put_contents('penyakit.json', $jsonfile);

if($buatfile){
    echo "Berhasil";
}
?>