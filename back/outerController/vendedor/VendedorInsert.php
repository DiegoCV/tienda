<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Oh! (°o° ) ¡es Fredy Arciniegas, el intelectualoide millonario!  \\
include_once realpath('../../innerController/VendedorController.php');

$idVENDEDOR = $_POST['idVENDEDOR'];
$TIENDA_idTIENDA = $_POST['TIENDA_idTIENDA'];
VendedorController::insert($idVENDEDOR, $TIENDA_idTIENDA);
echo "true";

//That´s all folks!