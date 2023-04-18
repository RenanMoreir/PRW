<?php

// $_get obtém dado de formulario enviado via GET
// $_post obtém dado do formulario enviado via POST

$nome = $_POST['nome']; // nome entre  '' deve ser igual ao do formulario
$idade = $_POST['idade'];

echo "<h1>$nome</h1>";
/*echo "<h2>$idade</h2>";*/

if(strlen($nome) < 20)
{
    echo "<h3>Nome deve conter no minimo 20 caracteres</h3>";
}
if ($idade < 18)
{
    echo "<h3>Aluno menor de didade</h3>";
}


echo "<input type='number' name='idade' value='$idade'>";
echo "<a href='form.html'><button>Voltar</button></a>";


?>