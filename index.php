<?php
    function render($html){
        $plantilla = <<<HTML
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
                <link rel="stylesheet" href="css/stylephp.css">
                <title>Taller PHP</title>
            </head>
            <body>
                <div id="container">
                    $html
                </div>
            </body>
        </html>
        HTML;
        return $plantilla;
    }
    /*
    Imagina que tienes un array que representa los planetas en
    nuestro sistema solar. Las claves son los nombres de los
    planetas y los valores son sus respectivos números de
    orden,empezandodesdeel sol.
    */
    /*
    Ahora, te enfrentas a una tarea. Necesitas poder buscar
    los nombres de los planetas por su número de orden
    */
    // Solución
    if ($_POST['input_punto1']){
        $planetas = array(
            "Mercurio" => 1,
            "Venus" => 2,
            "Tierra" => 3,
            "Marte" => 4,
            "Jupiter" => 5,
            "Saturno" => 6,
            "Urano" => 7,
            "Neptuno" => 8
        );
        $num_planeta = $_POST['input_punto1'];
        $planetas = array_flip($planetas);
        $planeta = $planetas[$num_planeta];
        $html = "
        <div id='titles'>
            <h1 class='text-center'>Taller PHP</h1>
            <h2 class='text-center'>Ejercicio 1</h2>
        </div>
        <div id='container_resultado'>
            <h3 class='text-left'>Resultado</h3>
            <p class='text-left'>El planeta número <strong>$num_planeta</strong> es <strong>$planeta</strong></p>
            <a class='btn btn-success' href='./index.html'>Volver</a>
        </div>";
        echo render($html); 

    }
    else if ($_POST['input_punto2']){
        /*
        Supongamos que estás creando un juego de simulación
        espacial y necesitas crear un sistema solar básico. Decides
        que cada sistema solar en tu juego debe tener un cierto
        número de planetas cuando se crea.
    
        Paso1: Decidir cuántos planetas tendrá el sistema solar
        Nota: La cantidad de planetas tienen que estar inicializados en
        'Deshabitado'
        $filledArray = array_fill(0, $_POST["numPlanetaSolar"], 'Deshabitado');
    
        */
        $filledArray = array_fill(0, $_POST["input_punto2"], 'Deshabitado');
        $html = "
        <div id='titles'>
            <h1 class='text-center'>Taller PHP</h1>
            <h2 class='text-center'>Ejercicio 2</h2>
        </div>
        <div id='container_resultado'>
            <h3 class='text-left'>Resultado</h3>
            <p class='text-left'>"."</p>
            <a class='btn btn-success' href='./index.html'>Volver</a>
        </div>";
        //echo render($html);
        var_dump($filledArray);
    }
    
