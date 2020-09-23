<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
function power($a,$b,$p){
    $x = 1;
        for($i = 0;$i<$p;$i++) $x *=($a+$b);
        return $x;}

for($i=1;$i<=7;$i++){
    $array[$i]=$argv[$i];
}

$a=power($array[1],$array[2],$array[5]);
$b=power($array[3],$array[4],$array[6]);
$x=power($a,$b,$array[7]);
printf("$x");





