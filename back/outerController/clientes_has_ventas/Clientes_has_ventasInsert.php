<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bastar� decir que soy Juan Pablo Castel, el pintor que mat� a Mar�a Iribarne...  \\
include_once realpath('../../innerController/Clientes_has_ventasController.php');

$CLIENTES_idCLIENTES = $_POST['CLIENTES_idCLIENTES'];
$CLIENTES_TIENDA_idTIENDA = $_POST['CLIENTES_TIENDA_idTIENDA'];
$VENTAS_idVENTAS = $_POST['VENTAS_idVENTAS'];
Clientes_has_ventasController::insert($CLIENTES_idCLIENTES, $CLIENTES_TIENDA_idTIENDA, $VENTAS_idVENTAS);
echo "true";

//That�s all folks!