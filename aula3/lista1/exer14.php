<?php

$x1 = "invertebrado";
$x2 = "anelideo";
$x3 = "onivoro";

if ($x1 == "vertebrado")
{
    if($x2 == "mamifero")
    {
        if ($x3 == "herbivoro")
        {
            echo "vaca\n";
        }
        else if ($x3 == "onivoro")
        {
            echo "homem\n";
        }
    }
    else if($x2 == "ave")
    {
        if ($x3 == "onivoro")
        {
            echo "pomba\n";
        }
        else if ($x3 == "carnivoro")
        {
            echo "aguia\n";
        }
    }
}
else if ($x1 == "invertebrado")
{
    if ($x2 == "inseto")
    {
        if ($x3 == "hematofago")
        {
            echo "pulga\n";
        }
        else if ($x3 == "herbivoro")
        {
            echo "lagarta\n";
        }
    }
    else if ($x2 == "anelideo")
    {
        if ($x3 == "hematofago")
        {
            echo "sanguessuga\n";
        }
        else if ($x3 == "onivoro")
        {
            echo "minhoca\n";
        }
    }
}
?>