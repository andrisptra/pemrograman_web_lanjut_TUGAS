<?php


$x = 5;
$y = 10;

function fungsi1(){
    global $x;
    global $y;
    // $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    $y = $x + $y;
}

fungsi1();
echo $y;