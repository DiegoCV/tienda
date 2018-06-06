<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\
include_once realpath('../../innerController/ProveedoresController.php');

$idPROVEEDORES = $_POST['idPROVEEDORES'];
$NOMBREEMPRESA_PROVEEDORES = $_POST['NOMBREEMPRESA_PROVEEDORES'];
$NOMBREEMPLEADO_PROVEEDORES = $_POST['NOMBREEMPLEADO_PROVEEDORES'];
$DESCUENTO_PROVEEDOR = $_POST['DESCUENTO_PROVEEDOR'];
$FECHAINGRESO_PROVEEDORES = $_POST['FECHAINGRESO_PROVEEDORES'];
ProveedoresController::insert($idPROVEEDORES, $NOMBREEMPRESA_PROVEEDORES, $NOMBREEMPLEADO_PROVEEDORES, $DESCUENTO_PROVEEDOR, $FECHAINGRESO_PROVEEDORES);
echo "true";

//That´s all folks!