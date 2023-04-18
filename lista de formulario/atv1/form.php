<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$tipo = $_GET['cont']; 

if ($tipo == "soma")
{
    $x = $n1 + $n2;
    echo "<h3>resultado: $x</h3>";

}
else if ($tipo == "subtrair")
{
    $x = $n1 - $n2;
    echo "<h3>resultado: $x</h3>";
}
else if ($tipo == "dividir")
{
    $x = $n1 / $n2;
    echo "<h3>resultado: $x</h3>";
}
else if ($tipo == "multiplicar")
{
    $x = $n1 * $n2;
    echo "<h3>resultado: $x</h3>";
}

?>
<a href="form.html"><button>voltar</button></a>