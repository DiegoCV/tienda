<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Te veeeeeooooo  \\
include_once realpath('../../innerController/AdministradorController.php');

$USUARIO = $_POST['USUARIO'];
$PASS = $_POST['PASS'];
$administrador = AdministradorController::login($USUARIO, $PASS);
if($administrador!=null){
$idADMINISTRADOR=$administrador->getIdADMINISTRADOR();
setcookie("idADMINISTRADOR","$idADMINISTRADOR");
 session_start();   
 	$_SESSION['idADMINISTRADOR'] = $idADMINISTRADOR;
echo '<script language="javascript">window.location="../../../front/tienda.php"</script>';
}else{
echo '<script language="javascript">window.location="../../../index.html"</script>';
}

//That´s all folks!