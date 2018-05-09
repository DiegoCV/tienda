<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Ahora con 25% menos groserías  \\
include_once realpath('../../innerController/ProveedoresController.php');

$idPROVEEDORES = $_POST['idPROVEEDORES'];
$NOMBREEMPRESA_PROVEEDORES = $_POST['NOMBREEMPRESA_PROVEEDORES'];
$NOMBREEMPLEADO_PROVEEDORES = $_POST['NOMBREEMPLEADO_PROVEEDORES'];
$DESCUENTO_PROVEEDOR = $_POST['DESCUENTO_PROVEEDOR'];
$FECHAINGRESO_PROVEEDORES = $_POST['FECHAINGRESO_PROVEEDORES'];
$TIENDA_idTIENDA = $_POST['TIENDA_idTIENDA'];
ProveedoresController::insert($idPROVEEDORES, $NOMBREEMPRESA_PROVEEDORES, $NOMBREEMPLEADO_PROVEEDORES, $DESCUENTO_PROVEEDOR, $FECHAINGRESO_PROVEEDORES, $TIENDA_idTIENDA);
echo "true";

//That´s all folks!