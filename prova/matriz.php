<?php

$x = floatval(readline());

for ($i = 0; $i < 5; $i++)
{
    for($o = 0; $o <5; $o++)
    {
        $mat[$i][$o] = floatval(readline());
    }
}

for ($i = 0; $i < 5; $i++)
{
    for($o = 0; $o <5; $o++)
    {
        
        if ($mat[$i][$o] >= $x )
        {
            $mat[$i][$o] = number_format($mat[$i][$o], 2, ".","");
            echo "Valor Encontrado: ",$mat[$i][$o]," Linha: $i Coluna: $o\n";
        }
        
        
    }
}


?>