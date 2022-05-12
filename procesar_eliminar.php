<?php 
include("cn.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM  ntos WHERE id_nombre  = '$id'";

$resultadoelimi = mysqli_query($conexion, $eliminar); 

if ($resultadoelimi) 
{
header("location: edicion.php");

} else {
  echo "<script>alert('No se pudo eliminar') ;window.history.go(-1) ;</script>";
}


?>