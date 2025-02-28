<?php

if (!$_POST || !isset($_POST['nombre'])) {
    echo '<h1>Formulario no enviado</h1>';
    echo '<h2>Por favor, llene el formulario</h2>';
    exit();
}

$nombre = $_POST['nombre'];

$url = "https://restcountries.com/v3.1/name/{$nombre}";
$respuesta = file_get_contents($url);
$respuesta = json_decode($respuesta);


// Resultado

echo '<h1>Resultado</h1>';
echo '<h2>Nombre: ' . $respuesta->name->common . '</h2>'; // Nombre común
echo '<h2>Capital: ' . $respuesta->capital[0] . '</h2>'; // Capital
echo '<h2>Población: ' . number_format($respuesta->population) . '</h2>'; // Población
echo '<h2>Continente: ' . $respuesta->continents[0] . '</h2>'; // Continente
echo '<h2>Banderas:</h2>';
echo '<img src="' . $respuesta->flags->png . '" alt="Bandera" width="200">';

?>