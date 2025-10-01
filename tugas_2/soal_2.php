<?php

function rataRataSuhu(array &$data) : float {
    $total = array_sum($data);
    $jumlahData = count($data);
    return $total / $jumlahData;
}

function limaSuhuTerendah(array &$data) : array {
    sort($data);
    return array_slice($data, 0, 5);
}

function limaSuhuTertinggi(array &$data) : array {
    rsort($data);
    return array_slice($data, 0, 5);
}


$suhuUdara = 
[29,35,38,31,34,36,39,33,34,40,35,32,37,34,31,36,33,39,30,33,41]; 

$rataRataSuhu = rataRataSuhu($suhuUdara);
$limaSuhuTerendah = implode(", ", limaSuhuTerendah($suhuUdara));
$limaSuhuTertinggi = implode(", ", limaSuhuTertinggi($suhuUdara));

echo "Rata-rata suhu = " . $rataRataSuhu;
echo "<br>";

echo "Suhu terendah = " . $limaSuhuTerendah;
echo "<br>";    

echo "Suhu tertinggi = " . $limaSuhuTertinggi;
echo "<br>";