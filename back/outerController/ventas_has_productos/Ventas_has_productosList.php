<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\
include_once realpath('../../innerController/Ventas_has_productosController.php');

$list=Ventas_has_productosController::listAll();
$rta="";
foreach ($list as $obj => $Ventas_has_productos) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Ventas_has_productos->getVENTAS_idVENTAS()->getidVENTAS()."</td>\n";
	$rta.="<td>".$Ventas_has_productos->getPRODUCTOS_idPRODUCTOS()->getidPRODUCTOS()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!