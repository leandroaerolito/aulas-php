<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>

    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Função como procedimento ou sub-rotina</h2>

    <?php 
    
        function dadosAutor(){
            echo "<div>";
            echo "<p>Tiago B. dos Santos</p>";
            echo "<p><a href=''>email@aa.com</a></p>";
            echo "<div/>";
        }
    
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>
        <?=dadosAutor()?>
    </section>


    <hr>

    <h2>Função com retorno de dados</h2>

    <?php 
    
        function dadosCurso(){

            return "Técnico em informática para Internet";
        }
    
    ?>

    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ministrado no Senac Penha</p>

    <hr>

    <h2>Função com Parâmetros (ou argumentos)</h2>
    <?php 

        function soma($valor1, $valor2, $valor3){
            $total = $valor1 + $valor2 + $valor3;
            return $total;

        }
        
    ?>
    <!-- Chamando e exibindo diretamente o retorno -->
<p>Resultado 1: <?=soma (23, 84, 1000.75)?> </p>
<?php

//Chamando o guardando o retorno
$resultado3 = soma(500, 480, 700);
?>
<p>Resultado 3: <?=$resultado3?> </p>
<?php if ($resultado3 > 100){ ?>
<p>Vinicius foi demitido!</p>
<?php } ?>

<!--Usando uma função como parte de uma condição -->
<?php if (soma (2, 3, 10) >=10 ){ ?>
    <p>Kaue reprovado!!!</p>
<?php } ?>

<h3>Função com parâmetros opcionais</h3>
<?php

function saudacao($mensagem, $pessoa = "fulano(a)"){
    return "Olá, $mensagem $pessoa!";
}
?>
<p><?=saudacao("bom dia", "Melissa")?> </p>
<p><?=saudacao("boa noite", "Tanaka")?> </p>
<p><?=saudacao("boa tarde")?> </p>

<h2>Indução de tipos de dados</h2>
<?php
/* Tipos de dados mais comuns:
string -> caracteres em geral
int -> números inteiros
float -> números com casa decimais
array -> vetor */

/* Indução de tipos deve ser feita nos parâmetros e no retorno da função.
Isso auxiliará na entrada/saída correta dos dados manipulados pela função, além de melhorar as mensagens de erro quando ocorrem problemas. */

function verificaNegativo(int $valor):string {
    /* Early return
    (é possível omitir o else neste caso)*/
    if($valor < 0){
        return "é negativo";
    }
    return "não é negativo";
}

// Código abaixo dá erro ao usar indução de tipos:
/* <p>Número 50: <?=verificaNegativo("texto")?> </p> */

?>
<p>Número 10: <?=verificaNegativo(10)?> </p>
<p>Número -10: <?=verificaNegativo(-10)?> </p>

<hr>

<h2>Função anônima (closure, lambda)</h2>

<?php
// A função fica associada a uma variável ou constante
$formataPreco = function(float $valor){
    $precoFormatado = "R$".number_format($valor, 2, ",", ".");
    return $precoFormatado;
}  //obrigatório usar ";"
?>
<p>1000 formatado fica: <?=$formataPreco(1000)?> </p>

</body>
</html>