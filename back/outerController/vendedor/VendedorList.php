<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Tranquilo, yo tampoco entiendo cómo funciona mi código  \\
include_once realpath('../../innerController/VendedorController.php');

$list=VendedorController::listAll();
$rta="";
foreach ($list as $obj => $Vendedor) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Vendedor->getidVENDEDOR()."</td>\n";
	$rta.="<td>".$Vendedor->getTIENDA_idTIENDA()->getidTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!