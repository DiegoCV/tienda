<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    A vote for Bart is a vote for Anarchy!  \\
include_once realpath('../../innerController/Clientes_has_ventasController.php');

$list=Clientes_has_ventasController::listAll();
$rta="";
foreach ($list as $obj => $Clientes_has_ventas) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Clientes_has_ventas->getCLIENTES_idCLIENTES()->getidCLIENTES()."</td>\n";
	$rta.="<td>".$Clientes_has_ventas->getCLIENTES_idCLIENTES()->getTIENDA_idTIENDA()."</td>\n";
	$rta.="<td>".$Clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getidCLIENTES()."</td>\n";
	$rta.="<td>".$Clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getTIENDA_idTIENDA()."</td>\n";
	$rta.="<td>".$Clientes_has_ventas->getVENTAS_idVENTAS()->getidVENTAS()."</td>\n";
	$rta.="<td>".$Clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_idVENDEDOR()."</td>\n";
	$rta.="<td>".$Clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_TIENDA_idTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!