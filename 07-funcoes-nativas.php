<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas</title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>    
    <hr>

    <h2>Strings</h2>
    <h3>trim()</h3>
<?php
/* Função que remove espaços antes e depois de strings */

$nome = "    Vinicius me deve 80 paçocas       ";
$nomeSemEspaco = trim($nome);
?>

<pre> <?=var_dump($nome)?> </pre>
<pre> <?=var_dump($nomeSemEspaco)?> </pre>

<h3>str_replace()</h3>
<?php
    /* Função que permite substituição de strings/caracterres. */
$fraseFeia = "Fulano é um bobão e xarope";
$fraseBunitinha = str_replace(
    ["xarope", "bobão"],
    "*******",
    $fraseFeia
);
?>

<p> <?=$fraseFeia?> </p>
<p> <?=$fraseBunitinha?> </p>

<h3>explode() </h3>
<?php
/* Função que TRANSFORMA uma string em um array */
$linguagens = "HTML - CSS - JS - PHP";
$arrayLinguagens = explode(" - ", $linguagens);
?>
<pre> <?= var_dump($linguagens)?> </pre>
<pre> <?= var_dump($arrayLinguagens)?> </pre>



    <h2>Numéricas</h2>
    <h3>min, max, round</h3>
<?php
$valores = [10, 5, 50, 1000, 275];
$valorQualquer = 1259.75;
?>
<p>Menor valor: <?=min($valores)?> </p>
<p>Maior valor: <?=max($valores)?> </p>
<p>Arredondamento: <?=round($valorQualquer)?> </p>

    <h2>Arrays</h2>
    <h3>implode()</h3>
<?php
/* Função que transforma array em string */
$bandas = ["Rush", "Slayer", "Dio"];
$textoBandas = implode(" - ", $bandas);
?>

<pre> <?=var_dump($bandas)?> </pre>
<pre> <?=var_dump($textBandas)?> </pre>
    
    <h3>extract</h3>
<!-- Função que extrai chaves associativas para variáveis -->
<?php
$aluno = [
    "id" => 1,
    "nome" => "Chaves do 8",
    "idade" => 25
];

extract($aluno)
?>
<ul>
    <li></li>
    <li></li>
    <li></li>
</ul>

<h3>array_sum()</h3>

<?php
/* Função para somar os valores de um array */
$total = array_sum($valores);
?>
<p>Soma dos valores: <?=$total?> </p>

<h3>array_unique</h3>





    <h2>Filtros</h2>

    <h2>Segurança</h2>

</body>
</html>