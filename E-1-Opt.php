<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba1</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>

 <p>Repetir: <input type="number" name="repetir" placeholder ="numero de  veces a repetir 1-10"/></p>

 <p><input type="submit" /></p>
<?php 

$nombre = "";
$repettir = 0;

if(isset($_POST['nombre']) && isset($_POST['repetir'])){
    $nombre = $_POST['nombre'];
    $repettir = $_POST['repetir'];

    for($i = 0; $i < $repettir; $i++){
        echo $nombre."\n";
    }

}



?>

</form>
    
</body>
</html>