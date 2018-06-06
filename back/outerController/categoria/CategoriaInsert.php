<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Documentaqué?  \\
include_once realpath('../../innerController/CategoriaController.php');

$idCATEGORIA = $_POST['idCATEGORIA'];
$NOMBRE_CATEGORIA = $_POST['NOMBRE_CATEGORIA'];
CategoriaController::insert($idCATEGORIA, $NOMBRE_CATEGORIA);
echo "true";

//That´s all folks!