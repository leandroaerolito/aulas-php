<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - PHP</title>

    <style>
        p {
            font-family: Verdana;
            font-size: 20px;
                 
        }

        <?php $cor = "gray"; ?>

        body { background-color: <?=$cor?>;}

    </style>    
</head>
<body>
    <h1>Exercício 01</h1>

    <?php
      $data = date("d/m/Y");
      //const data

      // Definindo fuso horário (timezone)
      date_default_timezone_set("America/Sao_Paulo");

      $hora = date("H:i");
      echo "Data: $data";
      echo "<br>";
      echo "Hora: $hora";
      echo "<br><br>";

      //$data = "29/10/2023";
      const NOME_ALUNO = "Leleco Rangers";
      $nomeCurso = "Programação";
      $cargaHoraria = 2200;
      $limiteFalta = $cargaHoraria / 4;
      
    ?>

    <h2>Dados consultados:</h2>

    <p>Nome do aluno:<b> <?=NOME_ALUNO?> </b></p>
    <p>Nome do curso:<b> <?=$nomeCurso?> </b></p>
    <p>Carga Horária:<b> <?=$cargaHoraria?> </b></p>
    <p>Limite de faltas:<b> <?=$limiteFalta?> </b></p>
    <p>A data de hoje é:<b> <?=$data?> </b></p>
        

<?php
$teste = "PHP Intelephense";

echo $teste;

?>
</body>

</html>