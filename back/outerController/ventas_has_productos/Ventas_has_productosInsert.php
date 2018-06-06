<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si mi madre entendiera mi código, estaría orgullosa  \\
include_once realpath('../../innerController/Ventas_has_productosController.php');

$Ventas_idVENTAS = $_POST['VENTAS_idVENTAS'];
$ventas= new Ventas();
$ventas->setIdVENTAS($Ventas_idVENTAS);
$Productos_idPRODUCTOS = $_POST['PRODUCTOS_idPRODUCTOS'];
$productos= new Productos();
$productos->setIdPRODUCTOS($Productos_idPRODUCTOS);
Ventas_has_productosController::insert($ventas, $productos);
echo "true";

//That´s all folks!