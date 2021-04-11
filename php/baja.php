<?php
$numero=$_POST['codigo'];


  $conexion = mysqli_connect("localhost", "root", "", "farmaciaAmerica") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select codigoBarras from productos
                        where codigoBarras=$numero") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from productos where codigoBarras=$numero") or
      die("Problemas en el select:" . mysqli_error($conexion));
    echo "Producto eliminado";
  } else {
    echo "No se encontro ese producto";
  }
  mysqli_close($conexion);
  ?>