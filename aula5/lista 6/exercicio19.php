<?php

$z = fgets(STDIN);
$x = fgets(STDIN);
for ($i = 0; $i < 12; $i++)
{
    for ($o = 0; $o < 12; $o++)
    {
        $mat[$i][$o] = fgets(STDIN);
    }
}

if ( $x = "S")
{
    for($u = 0; $u < 12; $u++)
    {
        $y = $y + $mat[$u][$z];
    }
}
else if ( $x = "M")
{
    for($u = 0; $u < 12; $u++)
    {
        $y = $y * $mat[$u][$z];
        $y = $y / 12;
    }
}

echo "$y\n";
?>