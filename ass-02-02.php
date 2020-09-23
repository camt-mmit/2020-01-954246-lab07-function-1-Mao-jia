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

$file=fopen($_SERVER['argv'][1],"r");
fscanf($file,"%d",$size);
$total=0;
for ($i=1;$i<=$size;$i++){
    fscanf($file,"%d %d",$base,$y);
    $total=power($total,-$base,$y);

}
printf("$total");
fclose($file);