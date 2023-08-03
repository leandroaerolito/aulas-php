<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estruturas de Controle de Repetição</h1>
    <hr>

    <h2>WHILE (enquanto)</h2>
<?php
$i = 1;

while( $i <= 5 ){
?>      
  <p><?=$i?></p>

<?php
  $i++; // $i = $i + 1
}
?>
  
  <h2>DO/WHILE (repita/até)</h2>
<?php
$j = 1;
do {
?>    
    <div>
    <h3>Título...</h3>
    <p>Lorem ipsum dolor sit amet.</p>
    </div>

<?php
    $j++;

   } while( $j <= 10 );
?>

    <h2>FOR (para)</h2>
<?php
//variável de controle; condição; atualização
for ( $i =1; $i<=3; $i++) {
?>
    <p><code>i</code> vale:<b> <?=$i?> </b></p>

<?php    
}
?>

<!-- MINI EXERCÍCIO
1) Crie um  array com os nomes dos meses do ano
2) Usando um loop (qualquer um), acesse o mostre os nomes dos meses dentro de uma lista ordenada
-->

<ol> <!-- abrindo a lista-->
<?php
$mesesDoAno = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "Novembro", "Dezembro"];
for ($i = 0; $i <= 11; $i++) {
?>
    <li>Os meses do ano são: <?=$mesesDoAno[$i]?></li>
<?php
}
?>
</ol> <!-- Fechando a lista -->



<?php
$alunos = [
    "Melissa", "Tanaka", "Zimbo", "Eduardo", "Kaue"
];

/*Função count() ou sizeof()
Literalmente conta a quantidade de elementos dentro de um array, retornando um número inteiro.*/

/*Guardamos em "cache"(memória) a quantidade de elementos, evitamdo assim a contagem a cada iteração do loop e melhorando a performance. */
$quantidade = count($alunos);

for ($i = 0; $i < $quantidade; $i++){
?>
    <p>Nome: <b><?=$alunos[$i]?></b></p>
<?php
}
?>

<hr>

<h2>FOREACH (para cada)</h2>
<p>Útil e mais fácil para lidar com <code>arrays</code>.</p>

<ol>
<?php foreach($mesesDoAno as $mes){ ?>
    <li> <?=$mes?></li>
<?php } ?>
</ol>

<?php
$clubes = [
"Corinthians" => "Timão",
"Palmeiras" => "Porco",
"São Paulo" => "Tricolor",
"Santos" => "Peixe"
];

foreach($clubes as $clube => $apelido) { //$clube é a chave e $apelido é o valor
    ?>
    <p><b><?=$clube?></b> é conhecido como <b><?=$apelido?></b>.</p>
    <?php
}
?>

<h2>Loop com MATRIZ</h2>
<?php
$planoDeEstudos = [
    ["HTML", "CSS", "JS"],
    ["React", "React Native"]
];

$quantidadePlanosEstudos = count($planoDeEstudos);


//usando FOR aninhado
for($linha = 0; $linha < count($planoDeEstudos); $linha++){
    for($coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++){
?>
    <p><b> <?=$planoDeEstudos[$linha] [$coluna]?> </b></p>        
<?php
    } // "FOR" coluna
} // "FOR" linha
?>

<hr>

<?php
//usando foreach aninhado
foreach($planoDeEstudos as $linha){
    foreach($linha as $coluna){
?>
    <p> <i><?=$coluna?></i> </p>        
<?php
    }
}
?>


<h3>Loop com matriz associativa</h3>
<?php
$clientes = [
    [
        "nome" => "Chaves",
        "idade"=> 8
    ],
    [
        "nome"=> "Chapolin",
        "idade" => 25
    ],
    [
        "nome" => "Chiquinha",
        "idade" => 10
    ],
];

foreach($clientes as $cliente){
?>
    <p>nome: <?=$cliente["nome"]?> </p>
    <p>idade: <?=$cliente["idade"]?> </p>

<?php
}
?>

<!--/*Lembrete sobre sintaxe de estruturas de controle (condicionais e loops)

if(){
} else {
}

OU 

if():
else:
endif;

for(){     OU    for:
}          OU    endfor;
-->


</body>
</html>

