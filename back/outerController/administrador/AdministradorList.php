<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\
include_once realpath('../../innerController/AdministradorController.php');

$list=AdministradorController::listAll();
$rta="";
foreach ($list as $obj => $Administrador) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Administrador->getidADMINISTRADOR()."</td>\n";
	$rta.="<td>".$Administrador->getNOMBRE()."</td>\n";
	$rta.="<td>".$Administrador->getAPELLIDO()."</td>\n";
	$rta.="<td>".$Administrador->getUSUARIO()."</td>\n";
	$rta.="<td>".$Administrador->getPASS()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!