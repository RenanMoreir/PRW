<?php

$x = "2.0 6.5 4.0 9.0"; //readline();
list($n1, $n2, $n3, $n4) = explode(" ", $x);

$med = (($n1*2)+($n2*3)+($n3*4)+($n4*1))/10;
$med = intval($med*10)/10;

$med = number_format($med, 1, ".","");
echo "Media: $med\n";


if ($med >= 7){
    echo "Aluno aprovado.\n";
}
else if ($med < 5){
    echo "Aluno reprovado.\n";
}
else if (($med >= 5) and ($med < 6.9)){
    echo "Aluno em exame.\n";

    $y = 6.4; //readline();

    $mrec = ($med + $y)/2;
    $mrec = number_format($mrec, 1, ".","");
    echo "Nota do exame: $y\n";

    if ($mrec >= 5){
        echo "Aluno aprovado.\n";
    }
    else if($mrec <= 4.9){
        echo "Aluno reprovado.\n";
    }

    echo "Media final: $mrec\n";

}

?>