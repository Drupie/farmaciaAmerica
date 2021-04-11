 <?php
echo '<style>

.table{
width:500px;
margin:0 auto;
display:flex;
justify-content:space-around;
flex-wrap:wrap;
}
.table div{
width:20%;
border-bottom:3px solid #ccc;
text-align:center;
margin-top:20px;
}

header {
    background-color: #311b92 ;
}
header h1,header h2{
    color: #fafafa;
    text-align: center;
    padding: 10px;
}
</style>';
$conexion = mysqli_connect("localhost", "root", "", "farmaciaAmerica") or
die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select * from productos") or
die("Problemas en el select:" . mysqli_error($conexion));
echo '<header><h1>Farmacia América</h1></header>';
echo '<header><h2>Inventario</h2></header>';
while ($reg = mysqli_fetch_array($registros)) {
  
    echo '<div class="table">';
    echo '<div>'.$reg[0].'</div>'.'<div>'.$reg[1].'</div>'.'<div>'.$reg[2].'</div>'.'<div>'.$reg[3].'</div>'.'<div>'.$reg[4].'</div>';
    echo '</div>';
}
  ?>