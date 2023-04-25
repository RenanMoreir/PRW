<?php

$nome = $_GET['nome'];
$n1 = $_GET["not1"];
$n2 = $_GET["not2"];
$fre = $_GET["frequencia"];

$med = ($n1+$n2)/2;

echo "<h3>Nome: $nome <br> Media: $med <br> Frequencia: $fre</h3>";
echo "<h3 style='margin-bottom: 5px;'>Situação:</h3>";
if ($med < 5)
{
   echo "<h3 style='color: red; margin: 5px;'>Reprova por nota</h3>";
}
if ($fre < 75)
{
    echo "<h3 style='color: red; margin: 5px;'>Reprova por Frequência</h3>";
}
if ($fre >=75 and $med >= 5)
{
    echo "<h3 style='margin: 5px;'>Aprovado</h3>";
}
?>

<a href="forms.html"><button>Voltar</button></a>