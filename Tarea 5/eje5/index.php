<?php
require '../libreria/motor.php';

plantilla::aplicar();

$n1 = 5;

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


<form action="/eje5/resultado5.php" method="POST" target="resultado">

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Nombre</label>
        </div>
        <div class="field-body">
            <div class="field">
            <p class="control">
                <input class="input" type="text" placeholder="Escribe el nombre del pokemon" name="nombre" />
            </p>
            </div>
        </div>
    </div>


    <button class="button is-primary" style="margin-left: 190px;">Enviar</button>
</form> 

<iframe name="resultado" style="width: 100%; height: 300px;">

</iframe>

<script>

    window.onload = function(){
        
        page = document.querySelector('html');
        page.style.background = "url('https://wallpapers.com/images/featured/all-pokemon-pictures-bh730s8zr74xsc2p.webp')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";

    //degradado para el body
    
    body = document.querySelector('body');
    body.style.background = "linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5))";
        
    }
</script>