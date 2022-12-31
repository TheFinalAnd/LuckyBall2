<?php

$servidor ="localhost";
$usuario="root";
$contraseña="";
$BD="luckyball";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
if(!$conection){
    echo "fallo en la conection";
    die("conection failed: ".mysqli_connect_error());
}
else{
    echo "conexion exitosa";
}
?>