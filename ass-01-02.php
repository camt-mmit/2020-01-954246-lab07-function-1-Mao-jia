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

$file=fopen($_SERVER['argv'][1],"r");
fscanf($file,"%d",$size);

for($i=1;$i<=$size;$i++){
    fscanf($file,"%f %f %f",$begin,$end,$m);
    loop($begin,$end,$m);
}
fclose($file);
