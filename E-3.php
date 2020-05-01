<?php
    $numero_aletorio; //Varible declrarada no inicializada
    $numero = rand(5, 15); //Varible con la funcion de generar N  Aleatorio
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero aletorio</title>
</head>
<body>
    <p> 1 -15</p>

    <form action="<?php echo $_SERVER["PHP_SELF"];?> "method="post">
        <p>Numero :</p> <input type="number" name="numero">
        <p><input type="submit" /></p>
    </form>

    <?php 
    
    if (isset($_POST['numero'])){
        $numero_aletorio = $_POST['numero'];
        if ($numero == $numero_aletorio){// == Comparacion 
            echo $numero." acertaste FELICDADES";//Comillas Dobles
        }else{
            echo $numero." no acertaste";
        }
    }
    ?>
    


    
</body>
</html>