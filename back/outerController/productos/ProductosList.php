<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Si crees que las mujeres son difíciles, no conoces Anarchy  \\
include_once realpath('../../innerController/ProductosController.php');

$list=ProductosController::listAll();
$rta="";
foreach ($list as $obj => $Productos) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Productos->getidPRODUCTOS()."</td>\n";
	$rta.="<td>".$Productos->getNOMBRE_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getUNIDAD_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getCOSTO_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getPRECIOVENTA_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getVALORMINIMO_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getFECHAINGRESO_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getCATEGORIA_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getFECHAVENCIMIENTO_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getTIENDA_idTIENDA()->getidTIENDA()."</td>\n";
	$rta.="<td>".$Productos->getCATEGORIA_idCATEGORIA()->getidCATEGORIA()."</td>\n";
	$rta.="<td>".$Productos->getPROVEEDORES_idPROVEEDORES()->getidPROVEEDORES()."</td>\n";
	$rta.="<td>".$Productos->getPROVEEDORES_idPROVEEDORES()->getTIENDA_idTIENDA()."</td>\n";
	$rta.="<td>".$Productos->getPROVEEDORES_TIENDA_idTIENDA()->getidPROVEEDORES()."</td>\n";
	$rta.="<td>".$Productos->getPROVEEDORES_TIENDA_idTIENDA()->getTIENDA_idTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!