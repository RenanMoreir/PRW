<?php
$nome = $_GET['nome'];
$prontuario = $_GET['prontuario'];
$idade = $_GET['idade'];
$periodo = $_GET['periodo'];
$modulo = $_GET['modulo'];

if ($nome == 0)
{
    echo "<h3 style='color: red;'>Nome não pode estar em branco</h3>";
}
if ($prontuario == 0)
{
    echo "<h3 style='color: red;'>Prontuário não pode estar em branco</h3>";
}
if (($idade <= 15) or ($idade >= 75))
{
    echo "<h3 style='color: red;'>Idade Invalida</h3>";
}
if ($periodo != "V" and $periodo != "N")
{
    echo "<h3 style='color: red;'>Período deve ser V-Vespertino ou N-Noturno;</h3>";
}
if (($modulo >= 1) or ($modulo <= 4))
{
    echo "<h3 style='color: red;'>Módulo invalido</h3>";
}


?>
<a href="forms.html"><button>Voltal</button></a>