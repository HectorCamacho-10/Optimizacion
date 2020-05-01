<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Valor Absoluto</p>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <p>Ingresa el valor : </p><input name="valor" type = "number">
    </form>
    
    <?php
        $valor = 0;
        if (isset($_POST["valor"])){
            $valor = $_POST["valor"];
            if($valor < 0){//7
                $valor *= -1;
               print  'valor absoluto = '. $valor;//8
            }
        }
     
    ?>

</body>
</html>