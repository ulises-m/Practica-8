<?php

$enlace = mysqli_connect('127.0.0.1', 'root', '', 'practica8');
//La condiciona que permite verificar que se logro conectar y envia el respectivo mensaje en cualquiera de los casos
if (!$enlace) {
    die('Error de Conexión (' . mysqli_connect_error() . ') '
            . mysqli_connect_error());
}
?>