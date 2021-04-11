<?php
$url="localhost";
$user="root";
$pass="";
$db="farmaciaAmerica";
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];
$numeroEmpleado=$_POST['numeroEmpleado'];
$email=$_POST['email'];
$contra=$_POST['password'];
$t_user=$_POST['t_user'];

echo $nombre.'</br>'.$apellidoPaterno.'</br>'.$apellidoMaterno.'</br>'.$numeroEmpleado.'<br/>'.$email.'<br/>'.$pass.'<br/>'.$t_user;

// conexion mysql
$con=mysqli_connect($url,$user,$pass,$db)or die("problemas en la conexión");

$sql="INSERT INTO usuarios(nombre,apellidoPaterno,apellidoMaterno,numeroEmpleado,email,pass,tipo_user)
VALUES('$nombre','$apellidoPaterno','$apellidoMaterno','$numeroEmpleado','$email','$contra','$t_user')";

mysqli_query($con,$sql);


    mysqli_close($con);

    echo "El alumno fue dado de alta.";
?>