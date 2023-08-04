<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Funções</title>
</head>
<body>
    <h1>Exercício 05 - FUNÇÕES</h1>    

    <hr>
<?php
//LEMBRAR de nomear diferentemente variáveis e parâmetros
function calcularMedia( $n1, $n2 ){
    // VERSÃO 1 (variável local)
    // $media = ($n1 + $n2) / 2;
    // return $media;

    // VERSÃO 2 (retorno implícito)
    return ($n1 + $n2) / 2;
}


$nota1 = 0;
$nota2 = 7;
$media = calcularMedia($nota1, $nota2);

if ($media >= 7){
    $situacao = "aprovado"; 
} else {
    $situacao = "reprovado";
}
?>

<p> <?=$media?> </p>
<p> <?=$situacao?> </p>


  

</body>
</html>