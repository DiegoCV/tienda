<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\
include_once realpath('../../innerController/VendedorController.php');

$list=VendedorController::listAll();
$rta="";
foreach ($list as $obj => $Vendedor) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Vendedor->getidVENDEDOR()."</td>\n";
	$rta.="<td>".$Vendedor->getNOMBRE_VENDEDOR()."</td>\n";
	$rta.="<td>".$Vendedor->getUSUARIO_VENDEDOR()."</td>\n";
	$rta.="<td>".$Vendedor->getPASS_VENDEDOR()."</td>\n";
	$rta.="<td>".$Vendedor->getTIENDA_idTIENDA()->getidTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!