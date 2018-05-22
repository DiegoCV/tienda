<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\
include_once realpath('../../innerController/TiendaController.php');

$list=TiendaController::listAll();
$rta="";
foreach ($list as $obj => $Tienda) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Tienda->getidTIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getNOMBRE_TIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getDIERECCION_TIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getNIT_TIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getREPRESENTATE_TIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!