<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Para entender la recursividad, primero debes entender la recursividad  \\
include_once realpath('../../innerController/VendedorController.php');

$idVENDEDOR = $_POST['idVENDEDOR'];
$TIENDA_idTIENDA = $_POST['TIENDA_idTIENDA'];
VendedorController::insert($idVENDEDOR, $TIENDA_idTIENDA);
echo "true";

//That´s all folks!