<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vva 'l doro  \\
include_once realpath('../../innerController/CategoriaController.php');

$list=CategoriaController::listAll();
$rta='
	<div class="mdl-list__item mdl-list__item--two-line">
		<span class="mdl-list__item-primary-content">
			<i class="zmdi zmdi-label mdl-list__item-avatar"></i>
';
$fin = "";
foreach ($list as $obj => $Categoria) {	
	$nombre = '<span>'.$Categoria->getNOMBRE_CATEGORIA().'</span>';
	$id = '<span class="mdl-list__item-sub-title">'.$Categoria->getidCATEGORIA().'</span>';
	$fin .= $rta.$nombre.$id.'</span></div>'; 
}
echo $fin;

				
//That´s all folks!