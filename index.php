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
    <title>B.notes</title>
     <link rel="stylesheet" href="estilo.css">
  
</head>
<body>

   
    
   
        <div class="container-add">
            <h2 class="container--title">Ingresar Calificaciones</h2>
            <form action="insertar.php"   method="POST" class="container--form">
            <label for="" class="container__label">Nombre del estudiante:</label>
             <input name="nombre" type="text" class="container__input">
         <label for="" class="container__label">No.:</label>
         <input name="numero" type="number" class="container__input">
         <label for="" class="container__label">Lengua Española:</label>
         <input name="lengua" type="number" class="container__input">
         <label for="" class="container__label">Matemática:</label>
         <input name="matematica" type="number" class="container__input">
         <label for="" class="container__label">Ciencias de la Naturaleza:</label>
         <input name="naturales" type="number" class="container__input">
         <label for="" class="container__label">Ciencias Sociales:</label>
         <input name="sociales" type="number" class="container__input">
         <label for="" class="container__label">Ingles Tecnico:</label>
         <input name="ingles" type="number" class="container__input">
         <label for="" class="container__label">F.I.H.R:</label>
         <input name="formacion" type="number" class="container__input">
         <label for="" class="container__label">Educacion fisica:</label>
         <input name="fisica" type="number" class="container__input">
         <label for="" class="container__label">Emprendimiento:</label>
         <input name="empredi" type="number" class="container__input">
         <label for="" class="container__label">Educacion Artistica:</label>
         <input name="arististi" type="number" class="container__input">
         <label for="" class="container__label">Org.sistema de informacion de consumo:</label>
         <input name="sistema" type="number" class="container__input">
         <label for="" class="container__label">Tec.entrevista de trabajo:</label>
         <input name="trabajo" type="number" class="container__input">
         <label for="" class="container__label">Impuesto de consumo:</label>
         <input name="consumo" type="number" class="container__input">
         <label for="" class="container__label">Formacion en centros de trabajo:</label>
         <input name="centro" type="number" class="container__input"> 

         <br><input class="container__submit" type="submit" value="Aceptar">
         
            </form>
        </div>
    <div class="container-table">
    <div class="table--title">Calificaciones de 6toF <a href="edicion.php" class="title-edit"  >Edicion</a> </div>
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

    <?php } mysqli_free_result($resultado);?> 
  



    </div>
</body>
</html>