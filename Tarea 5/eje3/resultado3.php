<?php


if(!$_POST || !isset($_POST['nombre'])){
    echo '<h1>Formulario no enviado</h1>';
    echo '<h2>Por favor, llene el formulario</h2>';
    exit();
}

$nombre = $_POST['nombre'];


$url= "http://universities.hipolabs.com/search?country={$nombre}";
$respuesta = file_get_contents($url);
$respuesta = json_decode($respuesta);

// Si tiene un espacio seguido del nombre del pais no lo reconoce asi que le advierto que le coloque un +
if(!$respuesta){
    echo '<h1>Resultado</h1>';
    echo '<h2>Por favor, coloque un + seguido del nombre del pais</h2>';
    exit();
}

echo '<h1>Resultado</h1>';
echo '<h2>Pais: '.$nombre.'</h2>';

//imprimiendo el array de universidades
echo '<h2>Universidades: </h2>';
echo '<ul>';
foreach($respuesta as $universidad){
    echo '<li>'.$universidad->name.'</li>';
}
echo '</ul>';

?>