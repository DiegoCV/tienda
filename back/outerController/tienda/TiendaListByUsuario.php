<?php

include_once realpath('../../innerController/TiendaController.php');
 session_start();  
$list=TiendaController::listByUsuario($_SESSION['idADMINISTRADOR']);
$rta="";                          
$res = '<select name="tienda" class="form-control" id="tienda">';
foreach ($list as $obj => $Tienda) {	
	$res.= '<option value="'.$Tienda->getidTIENDA().'">'.$Tienda->getNOMBRE_TIENDA().'</option>';
}
$res.='</select>';
echo $res;