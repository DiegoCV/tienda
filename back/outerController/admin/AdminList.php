<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un tequila, antes de que empiecen los trancazos  \\
include_once realpath('../../innerController/AdminController.php');

$list=AdminController::listAll();
$rta="";
foreach ($list as $obj => $Admin) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Admin->getidADMIN()."</td>\n";
	$rta.="<td>".$Admin->getNOMBRE()."</td>\n";
	$rta.="<td>".$Admin->getAPELLIDO()."</td>\n";
	$rta.="<td>".$Admin->getPASS_ADMIN()."</td>\n";
	$rta.="<td>".$Admin->getDIRECCION()."</td>\n";
	$rta.="<td>".$Admin->getFECHANACIMIENTO()."</td>\n";
	$rta.="<td>".$Admin->getFECHAINGRESO()."</td>\n";
	$rta.="<td>".$Admin->getTIENDA_idTIENDA()->getidTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!