<?php 
 include("cn.php");
 $ntos = "SELECT * FROM ntos";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imag/logo bnotes (1).png" type="image/x-icon">
    <title>control de edicion</title>
     <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="container-table container-table-editar">
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
    <div class="table__item"><?php echo $row ["Nombre_estudiante"] ?></div>
    <div class="table__item"><?php echo $row ["No"] ?></div>
    <div class="table__item"><?php echo $row ["Lengua_Española"] ?></div>
    <div class="table__item"><?php echo $row ["Matemática"] ?></div>
    <div class="table__item"><?php echo $row ["Naturales"] ?></div>
    <div class="table__item"><?php echo $row ["Sociales"] ?></div>
    <div class="table__item"><?php echo $row ["Ingles"] ?></div>
    <div class="table__item"><?php echo $row ["F_I_H_R"] ?></div>
    <div class="table__item"><?php echo $row ["Ed_fisica"] ?></div>
    <div class="table__item"><?php echo $row ["Emprend"] ?></div>
    <div class="table__item"><?php echo $row ["Ed_Artistica"] ?></div>
    <div class="table__item"><?php echo $row ["O_S_I_C"] ?></div>
    <div class="table__item"><?php echo $row ["Tec_entrevista_trabajo"] ?></div>
    <div class="table__item"><?php echo $row ["Imp_consumo"] ?></div>
    <div class="table__item"><?php echo $row ["F_C_T"] ?></div>
     <div class="table__item">
<a href="actualizar.php?id=<?php echo $row ["id_nombre"] ?>" class="container--item--linkS">Editar</a>|
<a href="procesar_eliminar.php?id=<?php echo $row ["id_nombre"] ?>" class="container--item--link">Eliminar</a>
</div>
    <?php } mysqli_free_result($resultado);?> 
    </div>
     <script src="confimarcion.js"></script>


     <div class="botones">
    <center> <a href="./index.php" ><input type="button" value="Volver al inicio"</a></center>
    
</div>
</body>
</html>