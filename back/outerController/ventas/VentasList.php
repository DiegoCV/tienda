<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿Sabías que Anarchy se generó a sí mismo?  \\
include_once realpath('../../innerController/VentasController.php');

$list=VentasController::listAll();
$rta="";
foreach ($list as $obj => $Ventas) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Ventas->getidVENTAS()."</td>\n";
	$rta.="<td>".$Ventas->getIVA_VENTAS()."</td>\n";
	$rta.="<td>".$Ventas->getIMPUESTOCONSUMO_VENTAS()."</td>\n";
	$rta.="<td>".$Ventas->getFECHACOMPRA_VENTAS()."</td>\n";
	$rta.="<td>".$Ventas->getVENDEDOR_idVENDEDOR()->getidVENDEDOR()."</td>\n";
	$rta.="<td>".$Ventas->getVENDEDOR_idVENDEDOR()->getTIENDA_idTIENDA()."</td>\n";
	$rta.="<td>".$Ventas->getVENDEDOR_TIENDA_idTIENDA()->getidVENDEDOR()."</td>\n";
	$rta.="<td>".$Ventas->getVENDEDOR_TIENDA_idTIENDA()->getTIENDA_idTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!