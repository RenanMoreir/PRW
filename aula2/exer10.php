<?php

    $l1 ="12 1 5.30"; //readline();
    list($cod, $num, $val) = explode(" ", $l1);
    
    $l2 ="16 2 5.10"; //readline();
    list($cod2, $num2, $val2) = explode(" ", $l2);

    $total = ($num*$val) + ($num2*$val2);
    $total=number_format($total, 2, ".", "");
    echo "VALOR A PAGAR: R$ $total\n";

?>