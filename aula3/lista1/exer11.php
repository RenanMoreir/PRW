<?php

$t = 0;
$x = "24 0"; //readline();
list($h1, $h2) = explode(" ", $x);

if ($h1 == $h2)
{
    $t = 24;
}
if ($h1 == 24 and $h2 == 0)
{
    $t = 1;
}
else {
for (; $h1 != $h2; $h1++ )
{
    
    if ($h1 == 24)
    {
        $h1 = 0;
    }
    $t = $t + 1;

}
}
echo "O JOGO DUROU $t HORA(S)\n";



?>