<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\
include_once realpath('../../innerController/VentasController.php');

$idVENTAS = $_POST['idVENTAS'];
$IVA_VENTAS = $_POST['IVA_VENTAS'];
$IMPUESTOCONSUMO_VENTAS = $_POST['IMPUESTOCONSUMO_VENTAS'];
$FECHACOMPRA_VENTAS = $_POST['FECHACOMPRA_VENTAS'];
$VENDEDOR_idVENDEDOR = $_POST['VENDEDOR_idVENDEDOR'];
$VENDEDOR_TIENDA_idTIENDA = $_POST['VENDEDOR_TIENDA_idTIENDA'];
VentasController::insert($idVENTAS, $IVA_VENTAS, $IMPUESTOCONSUMO_VENTAS, $FECHACOMPRA_VENTAS, $VENDEDOR_idVENDEDOR, $VENDEDOR_TIENDA_idTIENDA);
echo "true";

//That´s all folks!