<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>

<style>

body { background-color: bisque;
       text-align: center;
       border-top: 1rem;
}


 article {
    display: flex;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: large;
    justify-content: center;
    }

section {
    background-color: #8b00db;
    width: 300px;
    text-align: justify;
    margin: 80px;
    padding: 30px;
    align-items: center;
    box-shadow: 10px 10px 30px black;
    border-radius: 5px 10px;
    }

p { color: antiquewhite;
    
}

h2 { color: antiquewhite;
    text-transform: uppercase;
    font-weight: bold;
    background-color: black;
    text-align: center;
     
}



</style>

</head>
<body>
    <h1>Resolução para o exercício 02</h1>    

    <?php
    $persona_1 = ["Valeska Marquesine", "divandodev@gmail.com", "BarbaRosa23", 19, "feminino", "Campinas"];
    $persona_2 = ["Sr. Elielson Bueno", "tiulielson@gmail.com", "goianiaehtop", 24, "masculino", "São Paulo"];

    ?>
     
    <article>
        <section>
            <h2>Persona 1</h2>
            <p><?=$persona_1[0]?></p>
            <p><?=$persona_1[1]?></p>
            <p><?=$persona_1[3]?></p>
            <p><?=$persona_1[4]?></p>
        </section>

        <section>
            <h2>Persona 2</h2>
            <p><?=$persona_2[0]?></p>
            <p><?=$persona_2[1]?></p>
            <p><?=$persona_2[3]?></p>
            <p><?=$persona_2[4]?></p>
        </section>

    </article>

</body>
</html>