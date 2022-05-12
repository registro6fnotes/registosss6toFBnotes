<?php 
  include("cn.php");

  $nombre = $_POST["nombre"];
  $numero = $_POST["numero"];
  $lengua = $_POST["lengua"];
  $matematica = $_POST["matematica"];
  $naturales = $_POST["naturales"];
  $sociales = $_POST["sociales"];
  $ingles = $_POST["ingles"];
  $formacion = $_POST["formacion"];
  $fisica = $_POST["fisica"];
  $empredi = $_POST["empredi"];
  $arististi = $_POST["arististi"];
  $sistema = $_POST["sistema"];
  $trabj = $_POST["trabajo"];
  $consumo = $_POST["consumo"];
  $centro = $_POST["centro"];

$insertar = "INSERT INTO ntos (Nombre_estudiante,No,Lengua_Española,Matemática,Naturales,Sociales,Ingles,F_I_H_R,Ed_fisica,Emprend,Ed_Artistica,O_S_I_C,Tec_entrevista_trabajo,Imp_consumo,F_C_T)
 VALUES 
('$nombre', '$numero', '$lengua', '$matematica', '$naturales', '$sociales', '$ingles', '$formacion', '$fisica', '$empredi', '$arististi', '$sistema','$trabj', '$consumo','$centro')";

 $resultado = mysqli_query($conexion, $insertar);
 if ($resultado) 
 {
     echo "<script> alert ('Se ha insertado los datos correstamente');
     window.location='/bb'</script>";

 } else {
   echo "<script>alert('No se pudo insertar') ;window.history.go(-1) ;</script>";
 }


?>