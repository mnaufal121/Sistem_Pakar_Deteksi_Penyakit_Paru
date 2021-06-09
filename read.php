<?php
// File json yang akan dibaca (full path file)
$file = "data.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca data array menggunakan foreach
foreach ($data as $d) {
    echo $d['kode']. "<br>";
    echo $d['penyakit']. "<br>";
    echo $d['gejala']. "<br>";
}