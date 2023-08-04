<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Funções</title>

<style>
    .aprovado { color: blue;}
    .reprovado { color: red;}

</style>    

</head>
<body>
    <h1>Exercício 05 - FUNÇÕES</h1>    
    <hr>
<?php
//LEMBRAR de nomear diferentemente variáveis e parâmetros
function calcularMedia(float $n1, float $n2 ){ 
    // VERSÃO 1 (variável local)
    // $media = ($n1 + $n2) / 2;
    // return $media;

    // VERSÃO 2 (retorno implícito)
    return ($n1 + $n2) / 2;
}

function verificarSituacao(float $valorMedia ): string {
    /* Sintaxe alternativa usando operador ternário "?:" */
    return $valorMedia >= 7 ?"aprovado": "reprovado";

    /*if ($valorMedia >= 7){
        return "aprovado"; 
    } else {
        return "reprovado";
    }*/

}

$nota1 = 10;
$nota2 = 7;
$media = calcularMedia($nota1, $nota2);
$situacao = verificarSituacao($media);
?>

<p> <?=$media?> </p>
<p class="<?=$situacao?>"> <?=$situacao?> </p>

<!-- <p class="aprovado"> aprovado </p>
<p class="reprovado"> reprovado </p>
 -->

  

</body>
</html>