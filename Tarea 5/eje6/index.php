<?php
require '../libreria/motor.php';

plantilla::aplicar();

$n1 = 6;

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
            <label class="label">URL</label>
        </div>
        <div class="field-body">
            <div class="field">
            <p class="control">
                <input class="input" type="text" placeholder="Ingresa el url de la pagina web" name="nombre" />
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
        page.style.background = "url('https://imgs.search.brave.com/6WqfCow_5KeVMBEfxhTF3vIgPnqTBxDfodLwH7IcwOY/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pY2hl/Zi5iYmNpLmNvLnVr/L2FjZS93cy8yNDAv/Y3BzcHJvZHBiLzI3/NWEvbGl2ZS9hYTE3/YTUxMC1kNjUzLTEx/ZWUtOWE1Yi1lMzU0/NDdmNmM1M2IucG5n/LndlYnA')";
        page.style.backgroundSize = "cover";
        page.style.backgroundAttachment = "fixed";

    //degradado para el body
    
    body = document.querySelector('body');
    body.style.background = "linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5))";
        
    }
</script>