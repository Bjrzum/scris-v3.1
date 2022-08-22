<?php

$ruta_actual = "./";
$ruta_db = "adminer/adminer/";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Copiar</title>
    <style>
    body {
        display: flex;
        padding: 1em;
    }

    span {
        margin: 1em;
        background-color: #333;
        color: #fff;
        display: inline-block;
        width: 100%;
        padding: 1em;
        text-align: center;
        font-size: 1.5em;
    }

    h2 {
        text-align: center;
        display: inline-block;
        width: 100%;
        margin: 1em;
        text-transform: uppercase;
    }

    .proyecto,
    .adminer {
        margin: 1em;
        padding: 1em;
    }

    .copy {
        position: fixed;
        bottom: 4em;
        left: 0;
        width: 100%;
        display: flex;
    }

    .copiar {
        display: inline-block;
        width: 50%;
        text-align: center;
        font-size: 1.5em;
        padding: 1em;
        margin: 1em;
        background-color: #333;
        color: #fff;
    }
    </style>
</head>

<body>
    <div class="adminer">
        <h2>Adminer</h2>
        <?php
        //mostrar archivos de extension .db
        $directorio = opendir($ruta_db);
        while ($archivo = readdir($directorio)) {
            if (strpos($archivo, ".db")) {
                echo "<span class='file'>$archivo</span><br>";
            }
        }
        ?>
    </div>
    <div class="proyecto">
        <h2>Proyecto</h2>

        <?php
        //mostrar archivos de extension .db
        $directorio = opendir($ruta_actual);
        while ($archivo = readdir($directorio)) {
            if (strpos($archivo, ".db")) {
                echo "<span class='file'>$archivo</span><br>";
            }
        }
        ?>
    </div>
    <div class="copy">
        <div class="copy1 copiar">
            Proyecto a Adminer
        </div>
        <div class="copy2 copiar">
            Adminer a Proyecto
        </div>
    </div>
    <script>
    $(".copy1").click(function() {
        $.ajax({
            url: "copy.php",
            type: "POST",
            data: {
                ad: "adminer"
            },
            success: function(data) {

                if (data == "ok") {
                    alert("Copiado");
                } else {
                    alert("Error");
                }
                console.log(data);
            }
        });
    });

    $(".copy2").click(function() {
        $.ajax({
            url: "copy.php",
            type: "POST",
            data: {
                ad: "proyecto"
            },
            success: function(data) {
                if (data == "ok") {
                    alert("Copiado");
                } else {
                    alert("Error");
                }
                console.log(data);
            }
        });
    });
    </script>

</body>

</html>