<?php

   

   /* function Saludo(){
        $nombre = $_POST['name'];
        $apellido = $_POST['lastName'];
        if($_POST){
            echo "Hola ".$nombre. " ".$apellido;
        }
        
    }

    Saludo();
*/

    $numeroRandom = rand(1,10);

    echo $numeroRandom. "<br/>";

    $nombre = "daniel";
    $nomMayus = strtoupper($nombre); //poner el contenido en mayusculas.
    echo $nomMayus. "<br/>";

    $hoy = date(" d - m - Y "); //funcion que muestra la fecha
    echo $hoy;
?>