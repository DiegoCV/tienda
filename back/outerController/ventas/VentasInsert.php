<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    In Anarchy we trust  \\
include_once realpath('../../innerController/VentasController.php');

$idVENTAS = $_POST['idVENTAS'];
$IVA_VENTAS = $_POST['IVA_VENTAS'];
$FECHACOMPRA_VENTAS = $_POST['FECHACOMPRA_VENTAS'];
$Clientes_idCLIENTES = $_POST['CLIENTES_idCLIENTES'];
$clientes= new Clientes();
$clientes->setIdCLIENTES($Clientes_idCLIENTES);
$Vendedor_idVENDEDOR = $_POST['VENDEDOR_idVENDEDOR'];
$vendedor= new Vendedor();
$vendedor->setIdVENDEDOR($Vendedor_idVENDEDOR);
VentasController::insert($idVENTAS, $IVA_VENTAS, $FECHACOMPRA_VENTAS, $clientes, $vendedor);
echo "true";

//That´s all folks!