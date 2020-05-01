<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method = "POST">
        <p> Ingresa una palabra<p><input name="palabra" type="text"/>
        <p> Se reemplazara todas las letras "a"<p><br>
        <input type="submit">
    </form>

    <?php
    if (isset($_POST['palabra'])){
        $palabra = $_POST['palabra'];
        $salida  = str_replace("a", "*", $palabra);//10
        echo $salida;
    }
    
    ?>
</body>
</html>