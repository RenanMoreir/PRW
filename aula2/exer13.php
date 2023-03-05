<?php

$l1 = "7 14 106"; //readline();
list($a, $b, $c) = explode (" ", $l1);

$maior_ab =($a+$b+abs($a-$b))/2;

$maior_abc=($maior_ab+$c+abs($maior_ab-$c))/2;

echo "$maior_abc eh o maiorz\   n";

?>