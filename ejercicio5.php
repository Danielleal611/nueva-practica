<?php
if($_POST){
    $valorA = $_POST['Num1'];
    $valorB = $_POST['Num2'];

    $suma = $valorA + $valorB;
    echo "el resultado de la suma es: ".$suma;
}

if($valorA > $valorB){
    echo " el valor ".$valorA. " es mayor que ".$valorB;
}
else{
    echo " el valor ".$valorA. " es menor que ".$valorB;
}



?>