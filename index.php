<!doctype html>
<html lang="en">
<head >
<meta charset="UTF-8">
<title>
ejemplo
</title>
<body>

<?php
require ("conexion.php");
$conexion=mysqli_connect($db_host, $db_usuario, $db_contraseña);
if (mysqli_connect_errno()){
    echo "Fallo al conectar con la base de datos";
    exit();
}


mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");
$consulta="SELECT * FROM misvideos WHERE id='20'";
$resultados=mysqli_query($conexion,$consulta);

while ($fila=mysqli_fetch_array($resultados))
{


             $nombre=$fila['nombre'];
             $sinopsis=$fila['sinopsis'];
             $url=$fila['url'];


             echo("<center><h1>$nombre</h1><center>");
             echo("<center><h1>$sinopsis</h1><center>");
             

             //echo("<center><video src='$url' controls='controls' width='500' heigth='500' /><center>");             
             echo('<iframe width="560" height="315" src="'.$fila['url'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');






}

mysqli_close($conexion);
?>




</body>

</html>