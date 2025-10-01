<?php

function convertToRupiah(int &$jumlah, string &$mataUang, array &$rate) : string {
    if(!array_key_exists($mataUang,$rate)){
        return "Mata uang $mataUang tidak ditemukan";
    }
    $hasil = $jumlah * $rate[$mataUang];
    return "$jumlah  $mataUang  dikonversi menjadi  Rp. $hasil,00";
}

$rate = 
["usd"=>14367,"jpy"=>"1192","cny"=>2262,"krw"=>11.87,"myr"=>3416,"sgd"=>10621,"gbp"=>19074,"eur"=>15891]; 

echo convertToRupiah(8,"usd",$rate);
echo "<br>";
echo convertToRupiah(7,"jpy",$rate);
echo "<br>";
echo convertToRupiah(6,"cny",$rate);
echo "<br>";
echo convertToRupiah(5,"krw",$rate);
echo "<br>";
echo convertToRupiah(4,"myr",$rate);
echo "<br>";
echo convertToRupiah(3,"sgd",$rate);
echo "<br>";
echo convertToRupiah(2,"gbp",$rate);
echo "<br>";
echo convertToRupiah(1,"eur",$rate);
echo "<br>";
echo convertToRupiah(9,"aud",$rate);
echo "<br>"; // mata uang tidak ditemukan