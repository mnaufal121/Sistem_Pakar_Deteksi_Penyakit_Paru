<?php
$cf [] = array(
    'p1' => 0.8,
    'p2' => 0,
    'p3' => 0.8
);

$cf [] = array(
    'p1' => 0,
    'p2' => 0.8,
    'p3' => 0
);

$cf [] = array(
    'p1' => 0.8,
    'p2' => 0.6,
    'p3' => 0
);

$cf [] = array(
    'p1' => 0.4,
    'p2' => 0,
    'p3' => 0
);

$cf [] = array(
    'p1' => 0.6,
    'p2' => 0,
    'p3' => 0.8
);

$cf [] = array(
    'p1' => 0,
    'p2' => 0.8,
    'p3' => 0
);

$cf [] = array(
    'p1' => 0,
    'p2' => 0.6,
    'p3' => 0
);

$cf [] = array(
    'p1' => 0,
    'p2' => 0,
    'p3' => 0.4
);

$cf [] = array(
    'p1' => 0,
    'p2' => 0,
    'p3' => 0.8
);

$jsonfile = json_encode($cf, JSON_PRETTY_PRINT);

$buatfile=file_put_contents('cf.json', $jsonfile);

if($buatfile){
    echo "Berhasil";
}
?>