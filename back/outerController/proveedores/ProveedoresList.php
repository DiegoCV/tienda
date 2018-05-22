<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojos de perro azul  \\
include_once realpath('../../innerController/ProveedoresController.php');

$list=ProveedoresController::listAll();
$rta="";
foreach ($list as $obj => $Proveedores) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Proveedores->getidPROVEEDORES()."</td>\n";
	$rta.="<td>".$Proveedores->getNOMBREEMPRESA_PROVEEDORES()."</td>\n";
	$rta.="<td>".$Proveedores->getNOMBREEMPLEADO_PROVEEDORES()."</td>\n";
	$rta.="<td>".$Proveedores->getDESCUENTO_PROVEEDOR()."</td>\n";
	$rta.="<td>".$Proveedores->getFECHAINGRESO_PROVEEDORES()."</td>\n";
	$rta.="<td>".$Proveedores->getTIENDA_idTIENDA()->getidTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!