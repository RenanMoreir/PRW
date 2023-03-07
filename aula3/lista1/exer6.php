<?php

$a = "0 0"; //readline();
list($x,$y) = explode(" ",$a);

if ($x == 0 and $y == 0){
    echo "Origem\n";
}
else if ($x ==0 and $y != 0){
    echo "Eixo Y\n";
}
else if ($x != 0 and $y == 0){
    echo "Eixo X\n";
}
else if ($x >= 0 and $y >= 0 ){
    echo "Q1\n";
}
else if ($x <= 0 and $y >=0){
    echo "Q2\n";
}
else if ($x <= 0 and $y <= 0){
    echo "Q3\n";
}
else if ($x >= 0 and $y <= 0){
    echo "Q4\n";
}


?>