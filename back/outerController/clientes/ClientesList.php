<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\
include_once realpath('../../innerController/ClientesController.php');

$list=ClientesController::listAll();
$rta="";
foreach ($list as $obj => $Clientes) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Clientes->getidCLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getNOMBRE_CLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getDIRECCION_CLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getFECHANACIMIENTO_CLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getEMAIL_CLIENTES()."</td>\n";
	$rta.="<td>".$Clientes->getTIENDA_idTIENDA()->getidTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!