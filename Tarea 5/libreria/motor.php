<?php 
require_once('plantilla.php');


function get_ejercicio($numero){
    $ejercicio = get_lista_ejercicios();
    return $ejercicio[$numero];
}
function get_lista_ejercicios(){
    $ejercicios = array(
        1 => array(
            "nombre" => "Ejercicio 1",
            "descripcion" => "Prediccion de genero",
            "url" => "/eje1"
        ),
        array(
            "nombre" => "Ejercicio 2",
            "descripcion" => "Prediccion de edad",
            "url" => "/eje2"
        ),
        array(
            "nombre" => "Ejercicio 3",
            "descripcion" => "Universidades de un pais",
            "url" => "/eje3"
        ),
        array(
            "nombre" => "Ejercicio 4",
            "descripcion" => "Clima en Republica Dominicana",
            "url" => "/eje4"
        ),
        array(
            "nombre" => "Ejercicio 5",
            "descripcion" => "Informacion de un Pokemon",
            "url" => "/eje5"
        ),
        array(
            "nombre" => "Ejercicio 6",
            "descripcion" => "Noticias desde WordPress",
            "url" => "/eje6"
        ),
        array(
            "nombre" => "Ejercicio 7",
            "descripcion" => "Conversion de Monedas",
            "url" => "/eje7"
        ),
        array(
            "nombre" => "Ejercicio 8",
            "descripcion" => "Generador de imagenes con IA",
            "url" => "/eje8"
        ),
        array(
            "nombre" => "Ejercicio 9",
            "descripcion" => "Datos de un pais",
            "url" => "/eje9"
        ),
        array(
            "nombre" => "Ejercicio 10",
            "descripcion" => "Generador de chistes",
            "url" => "/eje10"
        )
    );
        return $ejercicios;
    
}

?>