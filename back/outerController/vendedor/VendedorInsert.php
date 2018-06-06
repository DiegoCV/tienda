<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\
include_once realpath('../../innerController/VendedorController.php');

$idVENDEDOR = $_POST['idVENDEDOR'];
$NOMBRE_VENDEDOR = $_POST['NOMBRE_VENDEDOR'];
$USUARIO_VENDEDOR = $_POST['USUARIO_VENDEDOR'];
$PASS_VENDEDOR = $_POST['PASS_VENDEDOR'];
$Tienda_idTIENDA = $_POST['TIENDA_idTIENDA'];
$tienda= new Tienda();
$tienda->setIdTIENDA($Tienda_idTIENDA);
VendedorController::insert($idVENDEDOR, $NOMBRE_VENDEDOR, $USUARIO_VENDEDOR, $PASS_VENDEDOR, $tienda);
echo "true";

//That´s all folks!