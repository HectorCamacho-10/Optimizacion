<?php
    $numero_aletorio; //3
    $numero = rand(5, 15); //4
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero aletorio</title>
</head>
<body>
    <p>Adivina el numero entre 5 y 15</p>

    <form action="<?php echo $_SERVER["PHP_SELF"];?> "method="post">
        <p>Numero :</p> <input type="number" name="numero">
        <p><input type="submit" /></p>
    </form>

    <?php 
    
    if (isset($_POST['numero'])){
        $numero_aletorio = $_POST['numero'];
        if ($numero == $numero_aletorio){//5
            echo $numero." acertaste FELICDADES";//6
        }else{
            echo $numero." no acertaste";
        }
    }
    ?>
    


    
</body>
</html>