<?php

    if($_POST){ 
        $nombre= $_POST["txtNombre"];
        $contra= $_POST["contrase"];
        if($nombre == "admin" and $contra == "asd"){
            header('location: pruebagrafica.php');
        }
        else {if($nombre == "cliente" and $contra == 123){
            header('location: tienda.php');
        }

        else{
            header('location: erro.php');
        }
         }
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
<body background="fondoo.png">
<br/><br/>
    <h1 align="center">BIENVENIDO</h1><br/><br/><br/>

    <form action="inicio.php" method="post" align="center">
       
        <font face='arial' size='5'>USUARIO</font>
       <p> <input type="text" name="txtNombre" id=""> </p>
        <br/>
        <br/>
        <font face='arial' size='5'>CONTRASEÑA</font>
       <p> <input type="password" name="contrase" id=""> </p>
        <br/>
       <p> <input type="submit" value="Enviar"> </p>

       <h4>creado por: </h4>
        <h3> Isaac Hernandez Zarate</h3>
       
    </form>
</body>
</html>