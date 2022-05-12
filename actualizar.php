<?php 
 include("cn.php");
 $id = $_GET["id"];
 $ntos = "SELECT * FROM ntos WHERE id_nombre = '$id'";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imag/logo bnotes (1).png" type="image/x-icon">
    <title>editar</title>
     <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <form class="container-table container-table-editar"  action="procesar.php" method="POST">
    <div class="table--title table--title--editar">Calificaciones de 6toF </div>
    <div class="table__header">Nombre del estudiante</div>
    <div class="table__header">No.</div>
    <div class="table__header">Lengua Española</div>
    <div class="table__header">Matemática</div>
    <div class="table__header">Naturales</div>
    <div class="table__header">Sociales</div>
    <div class="table__header">Ingles</div>
    <div class="table__header">F.I.H.R</div>
    <div class="table__header">Ed.fisica</div>
    <div class="table__header">Emprend.</div>
    <div class="table__header">Ed.Artistica</div>
    <div class="table__header">O.S.I.C</div>
    <div class="table__header">Tec.de trabajo</div>
    <div class="table__header">Imp. de consumo</div>
    <div class="table__header">F.C.T </div>
    <div class="table__header">Opciones</div>

    <?php $resultado = mysqli_query($conexion, $ntos);
     while ($row=mysqli_fetch_assoc($resultado)) {  ?>  
    <div class="table__item"></div>
    <input type="hidden" class="table__item" value="<?php echo $row ["id_nombre"]; ?>"  name="id" >
    <input type="text" class="table__inpu" value="<?php echo $row ["Nombre_estudiante"]; ?>"  name="nombre" >
    <input type="number" class="table__input" value="<?php echo $row ["No"]; ?>"  name="nu" >
    <input type="number" class="table__input" value="<?php echo $row ["Lengua_Española"]; ?>"  name="espanola" >
    <input type="number" class="table__input" value="<?php echo $row ["Matemática"]; ?>"  name="matema" >
    <input type="number" class="table__input" value="<?php echo $row ["Naturales"]; ?>"  name="natura" >
    <input type="number" class="table__input" value="<?php echo $row ["Sociales"]; ?>"  name="sociales" >
    <input type="number" class="table__input" value="<?php echo $row ["Ingles"]; ?>"  name="ingles" >
    <input type="number" class="table__input" value="<?php echo $row ["F_I_H_R"]; ?>"  name="formacion" >
    <input type="number" class="table__input" value="<?php echo $row ["Ed_fisica"]; ?>"  name="fisica" >
    <input type="number" class="table__input" value="<?php echo $row ["Emprend"]; ?>"  name="empredimi" >
    <input type="number" class="table__input" value="<?php echo $row ["Ed_Artistica"]; ?>"  name="artistica" >
    <input type="number" class="table__input" value="<?php echo $row ["O_S_I_C"]; ?>"  name="sistemas" >
    <input type="number" class="table__input" value="<?php echo $row ["Tec_entrevista_trabajo"]; ?>"  name="trabajo" >
    <input type="number" class="table__input" value="<?php echo $row ["Imp_consumo"]; ?>"  name="consumo" >
    <input type="number" class="table__input" value="<?php echo $row ["F_C_T"]; ?>"  name="centro" >

    <?php } mysqli_free_result($resultado);?> 
    <input type="submit" value="Actualizar" class="container-actuali">
  
    </form>
    <div class="botones">
    <center> <a href="./edicion.php" ><input type="button" value="Atras"</a></center>
    
</div>

</body>
</html>