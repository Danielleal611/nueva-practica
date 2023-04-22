<?php
// diferentes instrucciones para imprimir en pantalla.
echo "hola mundo ";

print("hola mundo ");

print_r("hola mundo"."<br/>");

$nombre = "daniel";
$edad = 21;

echo"hola ".$nombre." tu edad es: ".$edad."<br/>";

define("cedula", 1230); // valor de tipo constante (no pueden cambiar su valor).
// con los valores de tipo const no es necesario poner el signo $
echo cedula;

?>