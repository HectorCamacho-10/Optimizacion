<?php
    $numero_aletorio = 0; //Optimizado  Inicializacion
    $numero = mt_rand(5, 15);//Optimizado Funcion
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero aletorio</title>
</head>
<body>
    <p>Adivida entre 5  - 15</p>

    <form action="<?php echo $_SERVER["PHP_SELF"];?> "method="post">
        <p>Numero :</p> <input type="number" name="numero">
        <p><input type="submit" /></p>
    </form>

    <?php 
    
    if (isset($_POST['numero'])){
        $numero_aletorio = $_POST['numero'];
        if ($numero === $numero_aletorio){//Triple === para
           echo $numero.' acertaste FELICDADES';//comillas simples 
        }else{
            echo $numero.' no acertaste';
        }
    }
    ?>
    


    
</body>
</html>