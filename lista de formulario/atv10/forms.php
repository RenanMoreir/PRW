<?php

$p = $_GET['p'];
$m = $_GET['m'];
$g = $_GET['g'];

$p = 10 * $p;
$m = 12 * $m;
$g = 15 * $g;
$total = $p + $m + $g;

echo "Total: $total<br>";
?>
<a href="forms.html"><button>Voltal</button></a>