<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <style>
    p{ font-family:"Verdana";}
    .destaque { text-transform: uppercase; }
    </style>


</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <hr>

    <?php
    //Geração de texto (string)
    echo "Hoje tem Corinthians!";
    
    echo "<p class='destaque'>Hoje tem Corinthians!</p>";
    
    echo "<p>Hoje tem <span class='destaque'>Corinthians!</span> </p>";

    // Geração de texto estruturado (com tags, atributos)
    echo "<h2>Gerando HTML através do PHP</h2>";
    
    // CSS inline
    echo "<p style=\"color:red\"> O Vinícius está reprovado.</p>";
    echo "<p style='color:orange'> O Vinícius está reprovado.</p>";
    echo '<p style="color:pink"> O Vinícius está reprovado.</p>';

    ?>

    <script>
        let destaque = document.querySelector('p.destaque');
        console.log(destaque); 

    </script>
    
</body>
</html>