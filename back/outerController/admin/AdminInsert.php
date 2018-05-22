<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Más delgado  \\
include_once realpath('../../innerController/AdminController.php');

$idADMIN = $_POST['idADMIN'];
$NOMBRE = $_POST['NOMBRE'];
$APELLIDO = $_POST['APELLIDO'];
$PASS_ADMIN = $_POST['PASS_ADMIN'];
$DIRECCION = $_POST['DIRECCION'];
$FECHANACIMIENTO = $_POST['FECHANACIMIENTO'];
$FECHAINGRESO = $_POST['FECHAINGRESO'];
$TIENDA_idTIENDA = $_POST['TIENDA_idTIENDA'];
AdminController::insert($idADMIN, $NOMBRE, $APELLIDO, $PASS_ADMIN, $DIRECCION, $FECHANACIMIENTO, $FECHAINGRESO, $TIENDA_idTIENDA);
echo "true";

//That´s all folks!