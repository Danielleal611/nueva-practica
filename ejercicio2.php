<?php
if($_POST){
    $nombre = $_POST['Name'];

    echo "hola ".$nombre;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola mundo</h1>

    <form action="ejercicio2.php" method="post">
    <label for="Name">nombre</label>    
    <input type="text" name="Name" id="Name" placeholder="nombre">
    <input type="submit" value="enviar">

    </form>

</body>
</html>