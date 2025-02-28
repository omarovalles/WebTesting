<?php


if(!$_POST || !isset($_POST['nombre'])){
    echo '<h1>Formulario no enviado</h1>';
    echo '<h2>Por favor, llene el formulario</h2>';
    exit();
}

$nombre = $_POST['nombre'];


$url= "https://pokeapi.co/api/v2/pokemon/{$nombre}";
$respuesta = file_get_contents($url);
$respuesta = json_decode($respuesta);



echo '<h1>Resultado</h1>';
echo '<h2>Nombre del pokemon '.$nombre.'</h2>';

//Foto del pokemon

echo '<img src="'.$respuesta->sprites->front_default.'">';

// Altura del pokemon 

echo '<h2>Altura: '.$respuesta->height.'</h2>';

// Habilidades del pokemon

echo '<h2>Habilidades: </h2>';

// Lista de habilidades

echo '<ul>';
foreach($respuesta->abilities as $habilidad){
    echo '<li>'.$habilidad->ability->name.'</li>';
}
echo '</ul>';

// Tipos del pokemon

echo '<h2>Tipos: </h2>';

// Lista de tipos

echo '<ul>';
foreach($respuesta->types as $tipo){
    echo '<li>'.$tipo->type->name.'</li>';
}
echo '</ul>';

// Estadisticas del pokemon

echo '<h2>Estadisticas: </h2>';

// Lista de estadisticas

echo '<ul>';
foreach($respuesta->stats as $stat){
    echo '<li>'.$stat->stat->name.': '.$stat->base_stat.'</li>';
}
echo '</ul>';

// Peso del pokemon

echo '<h2>Peso: '.$respuesta->weight.'</h2>';
