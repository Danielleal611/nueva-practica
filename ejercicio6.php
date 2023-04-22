<?php
if($_POST){
    $boton = $_POST['boton'];

    switch($boton){
        case 1:
            echo "el boton presionado fue el 1";
        break;

        case 2:
            echo "el boton presionado fue el 2";
        break;

        case 3:
            echo "el boton presionado fue el 3";
        break;
    }
}



?>