<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase de prueba ¿Quieres ver la de verdad? ( ?~ ?? ?°)  \\
include_once realpath('../../innerController/VentasController.php');

$list=VentasController::listAll();
$rta="";
foreach ($list as $obj => $Ventas) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Ventas->getidVENTAS()."</td>\n";
	$rta.="<td>".$Ventas->getIVA_VENTAS()."</td>\n";
	$rta.="<td>".$Ventas->getFECHACOMPRA_VENTAS()."</td>\n";
	$rta.="<td>".$Ventas->getCLIENTES_idCLIENTES()->getidCLIENTES()."</td>\n";
	$rta.="<td>".$Ventas->getVENDEDOR_idVENDEDOR()->getidVENDEDOR()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!