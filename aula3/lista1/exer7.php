<?php

$x = "7 21 -14"; //readline();
list($n1,$n2,$n3) = explode(" ", $x);
$v1 = $n1;
$v2 = $n2;
$v3 = $n3;

for($i = 0; $i < 3; $i++){
    if(($v1 < $v2 and $v1 < $v3) and $v1 != 300000000){
        echo "$v1\n";
        $v1 = 300000000;
    }
    else if($v2 < $v3 and $v2 != 300000000){
        echo "$v2\n";
        $v2 = 300000000;
    }
    else if($v3 != 300000000){
        echo "$v3\n";
        $v3 = 300000000;
    }
}

echo "\n$n1\n$n2\n$n3\n";


?>