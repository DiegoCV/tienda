<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\
include_once realpath('../../innerController/ProductosController.php');

$list=ProductosController::listAll();
$rta="";
foreach ($list as $obj => $Productos) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Productos->getidPRODUCTOS()."</td>\n";
	$rta.="<td>".$Productos->getPROVEEDORES_idPROVEEDORES()->getidPROVEEDORES()."</td>\n";
	$rta.="<td>".$Productos->getNOMBRE_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getUNIDAD_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getCOSTO_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getCANTIDAD_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getPRECIOVENTA_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getVALORMINIMO_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getFECHAINGRESO_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getFECHAVENCIMIENTO_PRODUCTO()."</td>\n";
	$rta.="<td>".$Productos->getCATEGORIA_idCATEGORIA()->getidCATEGORIA()."</td>\n";
	$rta.="<td>".$Productos->getTIENDA_idTIENDA()->getidTIENDA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!