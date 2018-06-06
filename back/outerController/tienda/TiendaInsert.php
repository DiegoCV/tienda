<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\
include_once realpath('../../innerController/TiendaController.php');

$idTIENDA = $_POST['idTIENDA'];
$NOMBRE_TIENDA = $_POST['NOMBRE_TIENDA'];
$DIERECCION_TIENDA = $_POST['DIERECCION_TIENDA'];
$NIT_TIENDA = $_POST['NIT_TIENDA'];
$DIRECCION_TIENDA = $_POST['DIRECCION_TIENDA'];
$Administrador_idADMINISTRADOR = $_POST['ADMINISTRADOR_idADMINISTRADOR'];
$administrador= new Administrador();
$administrador->setIdADMINISTRADOR($Administrador_idADMINISTRADOR);
TiendaController::insert($idTIENDA, $NOMBRE_TIENDA, $DIERECCION_TIENDA, $NIT_TIENDA, $DIRECCION_TIENDA, $administrador);
echo "true";

//That´s all folks!