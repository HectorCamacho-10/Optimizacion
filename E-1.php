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
    $nombre = $_POST['nombre']; //1
    $repettir = $_POST['repetir'];
}

if($repettir ==1){
    echo $nombre."\n";

}
if($repettir ==2){
    echo $nombre."\n";
    echo $nombre."\n";
}
if($repettir ==3){
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
}
if($repettir ==4){
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    
}
if($repettir ==5){
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    
}
if($repettir ==6){
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
       
}
if($repettir ==7){
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    
}
if($repettir ==8){
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    
}
if($repettir ==9){
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    
}
if($repettir ==10){
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    echo $nombre."\n";
    
}

?>

</form>
    
</body>
</html>