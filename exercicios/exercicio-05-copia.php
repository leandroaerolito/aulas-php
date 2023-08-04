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
    
    // VERSÃO 2 (retorno implícito)
    return ($n1 + $n2) / 2;
}

function verificarSituacao(float $valorMedia ): string {
    /* Sintaxe alternativa usando operador ternário "?:" */
    return $valorMedia >= 7 ?"aprovado": "reprovado";
}

//  Lista de alunos e suas notas
$alunos = [
    [
        "nome" => "Aline",
        "nota1" => 9,
        "nota2"=> 6
    ],
    [
        "nome" => "Vitor",
        "nota1" => 5.5,
        "nota2"=> 7
    ],
    [
        "nome" => "Eliel",
        "nota1" => 6.66,
        "nota2"=> 10
    ],
    [
        "nome" => "Valeska",
        "nota1" => 0.5,
        "nota2"=> 5
    ],
    [
        "nome" => "Nicolas",
        "nota1" => 0,
        "nota2"=> 1
    ],

];

//$media = calcularMedia($nota1, $nota2);

foreach($alunos as $aluno){
    $nome = $aluno['nome'];
    $media = calcularMedia( $aluno ['nota1'], $aluno ['nota2']);
    $situacao = verificarSituacao($media);
?>
    <p> <?=$nome?> </p>
    <p> <?=$media?> </p>
    <p class= "<?=$situacao?>"> <?=$situacao?> </p>
    <hr>
<?php
}
?>

</body>
</html>