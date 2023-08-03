<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>

<style>
 body { font-family: verdana;
        font-size: medium;
} 
 h1 { font-style: italic;}
 h2 { color: blueviolet;}
 ul li:nth-child(even) {color: red;}
 ul li:nth-child(odd) {color: blue;}


</style>   



</head>
<body>
    <h1>Trabalhando com arrays (vetores e matrizes)</h1>

    <h2>Arrays com índice numérico</h2>


<?php
// Sintaxe com colchetes

$bandas = ["Savage", "Dio", "Rush"];

//Sintaxe com função array ()
$cursos = array("HTML", "Node", "PHP");

//Sintaxe de atribuição manual
$buteco [0] = "bolinho de bacalhau";
$buteco [1] = "pastel";
$buteco [2] = "esfiha";

// Constantes de array
define("UNIDADES", ["Penha", "Tatuapé"]);
const FRUTAS = ["morango", "abacaxi"];
?>

<h3>Acessando os dados</h3>
<ol>
    <li>Bandas que mais gosto:<?=$bandas[2]?></li>
    <li>Curso básico de: <?=$cursos[0]?></li>
    <li>Quero comer: <?=$buteco[1]?></li>
    <li>Estamos no Senac <?=UNIDADES[0]?></li>
    <li>Fruta boa para vitamina: <?=FRUTAS[0]?></li>

</ol>

<hr>

<h2>Array associativo</h2>

<?php
$curso =[
    // Chave associativa:
    // identificador => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 150,
    "descritivo" => "Aprenda a ferver água"
];

?>

<h3>Acessando os dados (array associativo)</h3>
<p>Nome do curso: <?=$curso["titulo"]?> </p>
<p>Carga horária: <?=$curso["carga_horaria"]?></p>
<p>Descritivo: <?=$curso["descritivo"]?></p>

<hr>

<h2>Matriz (array dentro de array)</h2>

<?php
$planoDeEstudos = [
    ["JS avançado", "Node.js", "React"],
    ["PHP", "POO", "MySQL", "Python"],
    ["Teoria das cores", "Photoshop", "UX/UI"]
];
?>
<ul>
   <li><?=$planoDeEstudos[0][2]?></li>
   <li><?=$planoDeEstudos[1][2]?></li>
   <li><?=$planoDeEstudos[2][1]?></li>
   <li><?=$planoDeEstudos[2][0]?></li>
</ul>

<hr>

<h2>Funções de análise de estruturas de dados (debug/depuração)</h2>

<h3>print_r()</h3>
<pre>
<?=print_r($bandas)?>
</pre>

<h3>var_dump()sma</h3>
<pre>
<?=var_dump($bandas)?>
</pre>

</body>
</html>