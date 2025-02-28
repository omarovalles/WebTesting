<?php


if(!$_POST || !isset($_POST['nombre'])){
    echo '<h1>Formulario no enviado</h1>';
    echo '<h2>Por favor, llene el formulario</h2>';
    exit();
}

$nombre = $_POST['nombre'];


$url= "https://api.agify.io/?name={$nombre}";
$respuesta = file_get_contents($url);
$respuesta = json_decode($respuesta);


echo '<h1>Resultado</h1>';
echo '<h2>Nombre: '.$nombre.'</h2>';
echo '<h2>
    Edad: '.($respuesta->age).'<br>
</h2>';


?>