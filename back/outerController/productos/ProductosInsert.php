<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\
include_once realpath('../../innerController/ProductosController.php');

$idPRODUCTOS = $_POST['idPRODUCTOS'];
$Proveedores_idPROVEEDORES = $_POST['PROVEEDORES_idPROVEEDORES'];
$proveedores= new Proveedores();
$proveedores->setIdPROVEEDORES($Proveedores_idPROVEEDORES);
$NOMBRE_PRODUCTO = $_POST['NOMBRE_PRODUCTO'];
$UNIDAD_PRODUCTO = $_POST['UNIDAD_PRODUCTO'];
$COSTO_PRODUCTO = $_POST['COSTO_PRODUCTO'];
$CANTIDAD_PRODUCTO = $_POST['CANTIDAD_PRODUCTO'];
$PRECIOVENTA_PRODUCTO = $_POST['PRECIOVENTA_PRODUCTO'];
$VALORMINIMO_PRODUCTO = $_POST['VALORMINIMO_PRODUCTO'];
$FECHAINGRESO_PRODUCTO = $_POST['FECHAINGRESO_PRODUCTO'];
$FECHAVENCIMIENTO_PRODUCTO = $_POST['FECHAVENCIMIENTO_PRODUCTO'];
$Categoria_idCATEGORIA = $_POST['CATEGORIA_idCATEGORIA'];
$categoria= new Categoria();
$categoria->setIdCATEGORIA($Categoria_idCATEGORIA);
$Tienda_idTIENDA = $_POST['TIENDA_idTIENDA'];
$tienda= new Tienda();
$tienda->setIdTIENDA($Tienda_idTIENDA);
ProductosController::insert($idPRODUCTOS, $proveedores, $NOMBRE_PRODUCTO, $UNIDAD_PRODUCTO, $COSTO_PRODUCTO, $CANTIDAD_PRODUCTO, $PRECIOVENTA_PRODUCTO, $VALORMINIMO_PRODUCTO, $FECHAINGRESO_PRODUCTO, $FECHAVENCIMIENTO_PRODUCTO, $categoria, $tienda);
echo "true";

//That´s all folks!