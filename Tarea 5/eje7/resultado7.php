<?php


if(!$_POST || !isset($_POST['nombre'])){
    echo '<h1>Formulario no enviado</h1>';
    echo '<h2>Por favor, llene el formulario</h2>';
    exit();
}

$nombre = $_POST['nombre'];


$url= "https://api.exchangerate-api.com/v4/latest/USD";
$respuesta = file_get_contents($url);
$respuesta = json_decode($respuesta);



// Conversion de moneda USD a pesos dominicanos

$tasaCambio = $respuesta->rates->DOP;
$cantidadUSD = $nombre;
$cantidadDOP = $cantidadUSD * $tasaCambio;

echo '<h1>Resultado</h1>';
echo '<h2>' . $cantidadUSD . ' USD equivalen a ' . $cantidadDOP . ' DOP</h2>';