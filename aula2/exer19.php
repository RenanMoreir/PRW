<?php

$x =556; //readline();
$y = gmdate("H:i:s", $x);

list($h,$i,$s) = explode(":", $y);

echo "$h:$i:$s\n";

?>