<?php

function fungsi1(){
    $x = 5; //local scope
    echo "<p>Variable x di dalam fungsi: $x</p>";
}

fungsi1();
// menggunakan variable x di luar fungsi akan menghasilkan error
echo "<p>Variable x di luar fungsi : $x</p>";