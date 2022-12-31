<?php
$servidor ="localhost";
$usuario="root";
$contraseña="";
$BD="luckyball";

$conection = mysqli_connect($servidor, $usuario, $contraseña, $BD);
if(!$conection){
    die("conection failed: ".mysqli_connect_error());
}
else{
}

$user= $_POST['user'];
$password=$_POST['password'];

$consulta= "SELECT  `password` FROM `login` WHERE`username`='$user' && `password`='$password'";
$datos2=mysqli_query($conection,$consulta);
$passwordDB=mysqli_fetch_column($datos2);
echo $passwordDB;
if($passwordDB){
    header("location:home.html");
    
}else{
    include("index.html");?>
    <p class="err">Contraseña o Usuario Incorrecto</p>
    <style>.err{
    text-align: center;
    color: #C1272D;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 2vmax ;
    transition: 0.3s;
}</style>
<script>
    document.querySelector(".err").innerHTML="Usuario o Contraseña incorrectos";
</script>
<?php
}
?>