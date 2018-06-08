<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\
include_once realpath('../../innerController/VendedorController.php');

$idVENDEDOR = null;
$NOMBRE_VENDEDOR = $_POST['NOMBRE_VENDEDOR'];
$USUARIO_VENDEDOR = $_POST['USUARIO_VENDEDOR'];
$PASS_VENDEDOR = $_POST['PASS_VENDEDOR'];
session_start();
$Tienda_idTIENDA = $_SESSION['tienda'];
$tienda= new Tienda();
$tienda->setIdTIENDA($Tienda_idTIENDA);
VendedorController::insert($idVENDEDOR, $NOMBRE_VENDEDOR, $USUARIO_VENDEDOR, $PASS_VENDEDOR, $tienda);
echo "true";

//That´s all folks!