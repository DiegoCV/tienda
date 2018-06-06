<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vva 'l doro  \\
include_once realpath('../../innerController/CategoriaController.php');

$list=CategoriaController::listAll();
$rta="";
foreach ($list as $obj => $Categoria) {	
	$rta.="<tr>\n";
	$rta.="<td>".$Categoria->getidCATEGORIA()."</td>\n";
	$rta.="<td>".$Categoria->getNOMBRE_CATEGORIA()."</td>\n";
	$rta.="</tr>\n";
}
echo $rta;

//That´s all folks!