<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Manipulação Dados na memória</h1>
    <hr>

    <?php
    //variáveis

    //string
    $curso = "Téc. em Informática para Internet";

    // inteiro (integer)
    $ano = 2013;

    //float (real)
    $preco = 2500.25;

    echo "<h2> Saída de dados usando echo na sintaxe COMPLETA</h2>";

    echo $curso; // sem estrutura/tag
    echo "<p>$curso</p>"; //interpolação (somente com aspas duplas)
    echo '<p>$curso</p>'; // vira uma string (ERRADO)
    echo "<p>".$curso."</p>"; //concatenação

    echo "<p>Ano Letivo: $ano</p>";
    echo "<p><b>Preço</b>: $preco</p>";

    ?>

    <h2>Saída de dados usando sintaxe simplificada</h2>
    <p> <?php echo $curso ?> </p>
    <p> <?=$curso?> </p>

    <p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?>.</p>

    <?php   
        // Constantes

        // 1ª forma: usando a função DEFINE()
        define("MEU_NOME","Leandro Rocha");

        //2ª forma: usando a palavra-chave const
        const UNIDADE = "Penha";

        // Saída de dados constantes
        echo MEU_NOME;
        echo "<p><b>".MEU_NOME."</b></p>";
    ?>
    
    <!-- Saída Simplificada-->
    <p>Meu chamo<b> <?=MEU_NOME?> </b> e estou no Senac <?=UNIDADE?>.</p>
    


</body>
</html>