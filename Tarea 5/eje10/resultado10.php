<?php


$url = "https://official-joke-api.appspot.com/random_joke";
$respuesta = file_get_contents($url);
$respuesta = json_decode($respuesta);


// Resultado

echo $respuesta -> setup;
echo '<br>';
echo $respuesta -> punchline;