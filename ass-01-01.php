<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
function transfer($c){$f=$c*9/5+32; return $f;}
function loop($begin,$end,$m){
    do{$pp=transfer($begin);
    printf("%7.2f %10.2f\n",$begin,$pp);
    $begin += $m;}
    while ($begin <= $end);
    return $begin;}

$begin=$argv[1];
$end=$argv[2];
$m=$argv[3];
printf("Celsius Fahrenheit\n");
loop($begin,$end,$m);





