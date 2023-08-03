<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>

<style>
    h1 {
        text-align: center;
        font-size: 40px;
        font-weight: bold;
    }

    table {
        border: 2px solid black;
        font-size: 25px;
        color: darkmagenta;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: left;
        border-collapse: collapse;
        padding: 20px 10px 20px 5px;
        width: 100%;

    }

    td { border: 2px solid black;
         text-align: start;
         padding: 0.5rem;

    }

    th {
        border: 3px solid black;
        text-align: center;
        padding: 10px;
    }

    tr {
        padding: 15px;    
    }

    tr:nth-child(odd){background: lightblue; }
    tr:hover { background-color: burlywood;}
</style>    


</head>
<body>

<h1>Exercício 04 | Loop & Array</h1>

<table>
    <tr>
        <th>ID</td>
        <th>Linguagem</td>
        <th>Descrição</td>
    </tr>

    <?php
$linguagens = [
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-end",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
];

$id = 0; 
foreach ($linguagens as $linguagem => $descricao){
$id++;
?>
<tr>
    <td><?=$id?></td>
    <td><?=$linguagem?></td>
    <td><?=$descricao?></td>
</tr>
<?php
} 
?>

</table>


    
</body>
</html>