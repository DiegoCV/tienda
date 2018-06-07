<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Era más fácil crear un framework que aprender a usar uno existente  \\
include_once realpath('../../innerController/AdministradorController.php');

$idADMINISTRADOR = 'vacio';
$NOMBRE = $_POST['NOMBRE'];
$APELLIDO = $_POST['APELLIDO'];
$USUARIO = $_POST['USUARIO'];
$PASS = $_POST['PASS'];
AdministradorController::insert($idADMINISTRADOR, $NOMBRE, $APELLIDO, $USUARIO, $PASS);
echo '<script language="javascript">window.location="../../../index.html"</script>';
//That´s all folks!