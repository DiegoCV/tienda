<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    -¡UNO! -¡¡ +4 !!  \\
include_once realpath('../../innerController/ClientesController.php');

$idCLIENTES = $_POST['idCLIENTES'];
$NOMBRE_CLIENTES = $_POST['NOMBRE_CLIENTES'];
$DIRECCION_CLIENTES = $_POST['DIRECCION_CLIENTES'];
$FECHANACIMIENTO_CLIENTES = $_POST['FECHANACIMIENTO_CLIENTES'];
$EMAIL_CLIENTES = $_POST['EMAIL_CLIENTES'];
$TIENDA_idTIENDA = $_POST['TIENDA_idTIENDA'];
ClientesController::insert($idCLIENTES, $NOMBRE_CLIENTES, $DIRECCION_CLIENTES, $FECHANACIMIENTO_CLIENTES, $EMAIL_CLIENTES, $TIENDA_idTIENDA);
echo "true";

//That´s all folks!