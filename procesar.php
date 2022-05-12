<?php 
include("cn.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$numero = $_POST["nu"];
$lengua = $_POST["espanola"];
$matematica = $_POST["matema"];
$naturales = $_POST["natura"];
$sociales = $_POST["sociales"];
$ingles = $_POST["ingles"];
$formacion = $_POST["formacion"];
$fisica = $_POST["fisica"];
$empredi = $_POST["empredimi"];
$arististi = $_POST["artistica"];
$sistema = $_POST["sistemas"];
$trabj = $_POST["trabajo"];
$consumo = $_POST["consumo"];
$centro = $_POST["centro"];

 $actualizar = "UPDATE ntos SET Nombre_estudiante='$nombre', No='$numero', Lengua_Española='$lengua', Matemática='$matematica', Naturales='$naturales', Sociales='$sociales', 
 Ingles='$ingles', F_I_H_R='$formacion', Ed_fisica='$fisica', Emprend='$empredi', Ed_Artistica='$arististi', O_S_I_C='$sistema', Tec_entrevista_trabajo='$trabj', Imp_consumo='$consumo', 
 F_C_T='$centro' WHERE id_nombre= '$id'";


 $resultado = mysqli_query($conexion, $actualizar);

 if ($resultado) 
 {
     echo "<script> alert ('Se ha insertado los datos correstamente');
     window.location='/bb/edicion.php'</script>";

 } else {
   echo "<script>alert('No se pudo actualizado') ;window.history.go(-1) ;</script>";
 }

?>