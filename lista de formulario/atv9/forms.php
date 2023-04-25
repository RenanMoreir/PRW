<?php


$nome = $_GET['nome'];
$hor = $_GET['hor'];

if (intval(substr($hor,0,2)) < 12 )
{
    echo "bom dia, $nome<br>";
}
else if (intval(substr($hor,0,2)) < 18 )
{
    echo "boa tarde, $nome<br>";
}
else if (intval(substr($hor,0,2)) > 18 )
{
    echo "boa noite, $nome<br>";
}

?>
<a href="forms.html"><button>Voltar</button></a>