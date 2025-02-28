<?php
require '../libreria/motor.php';

plantilla::aplicar();

$n1 = 10;

$ejercicio = get_ejercicio($n1);

if(!$ejercicio){
    echo '<h1>Ejercicio no encontrado</h1>';
    echo '<h2>el ejercicio no existe</h2>';
    echo '<a>Regresar</a>';

    exit();
}

$ejercicio = (object)$ejercicio;
?>


<div class="exercises-box">
    <h1 class="title"><?php echo $ejercicio->nombre; ?></h1>
    <p class="subtitle"><?php echo $ejercicio->descripcion; ?></p> 
</div>


<form action="/eje10/resultado10.php" method="POST" target="resultado">


    <button class="button is-primary" style="margin-left: 190px;">Generar chiste</button>
</form> 

<iframe name="resultado" style="width: 100%; height: 300px;">

</iframe>

<script>

    window.onload = function(){
        
        page = document.querySelector('html');
        page.style.background = "url('https://media.istockphoto.com/id/639765496/es/vector/riendo-con-l%C3%A1grimas-y-se%C3%B1alando-emoticono.jpg?s=612x612&w=0&k=20&c=uk_QtIHkIo7f6gCqT1L0g7bAQqGHUE9ZRKW-vliX9eQ=')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";

    //degradado para el body
    
    body = document.querySelector('body');
    body.style.background = "linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5))";
        
    }
</script>