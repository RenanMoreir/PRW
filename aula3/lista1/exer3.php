<?php
$x = 25.01; //readline();

if ($x>=0 and $x <= 25){
    echo "Intervalo [0,25]\n";
}
else if ($x > 25 and $x <= 50){
    echo "Intervalo (25,50]\n";
}
else if ($x > 50 and $x <= 75){
    echo "Intervalo (50,75]\n";
}
else if ($x > 75 and $x <= 100){
    echo "Intervalo (75,100]\n";
}
else{
    echo "Fora de intervalo\n";
}

?>