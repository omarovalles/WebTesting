<?php
require 'libreria/motor.php';

plantilla::aplicar();
?>
    <div class="columns is-centered">
      <div class="column is-half">
        <h1 class="title">Bienvenido a la Tarea 5</h1>
        <p><b>En esta tarea se presentan 10 ejercicios de programación en PHP:</b></p>
        <ul>

          <?php
          $ejercicios = get_lista_ejercicios();
          foreach($ejercicios as $ejercicio){
            echo '<li><a href="'.$ejercicio['url'].'">'.$ejercicio['nombre'].'</a> - '.$ejercicio['descripcion'].'</li>';
          }
          ?>
        </ul>
      </div>
    </div>
