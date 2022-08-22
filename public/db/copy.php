<?php
$ruta_actual = "./";
$ruta_db = "adminer/adminer/";

if (isset($_POST['ad'])) {
    $ad = $_POST['ad'];

    $ruta_destino = "";
    $ruta_origen = "";

    if ($ad == "adminer") {
        $ruta_destino = $ruta_db;
        $ruta_origen = $ruta_actual;
    } else if ($ad == "proyecto") {
        $ruta_destino = $ruta_actual;
        $ruta_origen = $ruta_db;
    }

    //copiar los archivos .db
    $directorio = opendir($ruta_origen);
    while ($archivo = readdir($directorio)) {
        if (strpos($archivo, ".db")) {
            copy($ruta_origen . $archivo, $ruta_destino . $archivo);
        }
    }
    echo "ok";
}