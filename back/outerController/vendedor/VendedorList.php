<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\
include_once realpath('../../innerController/VendedorController.php');

$list=VendedorController::listAll();
$rta='
	<div class="mdl-list__item mdl-list__item--two-line">
		<span class="mdl-list__item-primary-content">
			<i class="zmdi zmdi-label mdl-list__item-avatar"></i>
';
$fin = "";
foreach ($list as $obj => $Vendedor) {	
	$nombre = '<span>'.$Vendedor->getNOMBRE_VENDEDOR().'</span>';
	$id = '<span class="mdl-list__item-sub-title">'.$Vendedor->getUSUARIO_VENDEDOR().'</span>';
	$fin .= $rta.$nombre.$id.'</span></div>'; 
}
echo $fin;

//That´s all folks!