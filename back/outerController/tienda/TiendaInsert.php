<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ella existi� s�lo en un sue�o. �l es un poema que el poeta nunca escribi�.  \\
include_once realpath('../../innerController/TiendaController.php');

$idTIENDA = $_POST['idTIENDA'];
$NOMBRE_TIENDA = $_POST['NOMBRE_TIENDA'];
$DIERECCION_TIENDA = $_POST['DIERECCION_TIENDA'];
$NIT_TIENDA = $_POST['NIT_TIENDA'];
$REPRESENTATE_TIENDA = $_POST['REPRESENTATE_TIENDA'];
TiendaController::insert($idTIENDA, $NOMBRE_TIENDA, $DIERECCION_TIENDA, $NIT_TIENDA, $REPRESENTATE_TIENDA);
echo "true";

//That�s all folks!