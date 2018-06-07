<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    En lo que a mí respecta, señor Dix, lo imprevisto no existe  \\
include_once realpath('../../innerController/TiendaController.php');

 session_start();   

$idTIENDA = null;
$NOMBRE_TIENDA = $_POST['NOMBRE_TIENDA'];
$DIERECCION_TIENDA = $_POST['DIERECCION_TIENDA'];
$NIT_TIENDA = $_POST['NIT_TIENDA'];
$DIRECCION_TIENDA = $_POST['DIRECCION_TIENDA'];
$Administrador_idADMINISTRADOR =  $_SESSION['idADMINISTRADOR'];
$administrador= new Administrador();
$administrador->setIdADMINISTRADOR($Administrador_idADMINISTRADOR);
TiendaController::insert($idTIENDA, $NOMBRE_TIENDA, $DIERECCION_TIENDA, $NIT_TIENDA, $DIRECCION_TIENDA, $administrador);
echo '<script language="javascript">window.location="../../../front/tienda.php"</script>';
//That´s all folks!