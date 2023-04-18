<?php

$nome = $_GET['nome'];
$n1 = $_GET["not1"];
$n2 = $_GET["not2"];
$fre = $_GET["frequencia"];

$med = ($n1/$n2)/2;

echo "<h3>Nome: $nome Media: $med Frequencia:$fre</h3>"
if
?>