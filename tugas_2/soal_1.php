<?php

$negaraAsia = [
    "Indonesia" => "Jakarta",
    "India" => "New Delhi",
    "Jepang" => "Tokyo",
    "Cina" => "Beijing",
    "Malaysia" => "Kuala Lumpur",
    "Filipina" => "Manila",
    "Korea Utara" => "Pyongyang",
    "Korea Selatan" => "Seoul",
    "Iran" => "Teheran",
    "Irak" => "Baghdad",
    "Vietnam" => "Hanoi",
    "Thailand" => "Bangkok",
];

$count = 1;
foreach ($negaraAsia as $negara => $ibuKota){
    echo "$count. $negara ibu kotanya adalah $ibuKota";
    echo "<br>";
    $count++;
}