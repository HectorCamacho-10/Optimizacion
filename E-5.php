<?php
class Persona {

    //Atributos
    public $nombre = "";
    
   
   //Metodos
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
    if(isset($_POST["nombre"])){

        

        $persona->guardar($_POST["nombre"]);
        echo "<p>Hola </p><br> \t". $persona->mostrar() . "<p><br> como estas?</p>";//9
       
    }
    ?>
    
</body>
</html>