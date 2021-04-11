<?php
$url="localhost";
$user="root";
$pass="";
$db="farmaciaAmerica";
$nombreProducto=$_POST['nombreProducto'];
$codigoBarras=$_POST['codigoBarras'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];


// conexion mysql
$con=mysqli_connect($url,$user,$pass,$db)or die("problemas en la conexión");

$sql="INSERT INTO productos(nombreProducto,codigoBarras,cantidad,precio)
VALUES('$nombreProducto',$codigoBarras,$cantidad,$precio)";

mysqli_query($con,$sql);


    mysqli_close($con);

    echo "El alumno fue dado de alta.";
?>