<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando Gregorio Samsa se despertó una mañana después de un sueño intranquilo, se encontró sobre su cama convertido en un monstruoso insecto.  \\
include_once realpath('../../innerController/TiendaController.php');

$list=TiendaController::listAll();
$rta="";
foreach ($list as $obj => $Tienda) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Tienda->getidTIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getNOMBRE_TIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getDIERECCION_TIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getNIT_TIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getDIRECCION_TIENDA()."</td>\n";
	$rta.="<td>".$Tienda->getADMINISTRADOR_idADMINISTRADOR()->getidADMINISTRADOR()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!