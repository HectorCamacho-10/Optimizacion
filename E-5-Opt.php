<?php
class Persona {

    
    public $nombre = "";
    
   
   
    public function guardar($nombre) {
        $this-> nombre = $nombre;
    }

    public function mostrar(){
       return  $this->nombre;
    }
}

    
$persona  =  new persona();
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?> " method = "post">
    <p>Introduce tu nombre</p><input name="nombre" type="text">
    <input type="submit">
    </form> 
    <?php 
    if(isset($_POST["nombre"])){ //Codigo Optimizado
        $persona->guardar($_POST["nombre"]);
        ?><p>Hola</p><br><?php
        echo  $persona->mostrar() ;?>
        <p><br> como estas?</p><?php
       
    }
    ?>
    
</body>
</html>