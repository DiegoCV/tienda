<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\
include_once realpath('../../innerController/AdminController.php');

$NOMBRE = $_POST['NOMBRE'];
$PASS_ADMIN = $_POST['PASS_ADMIN'];
echo '<script language="javascript">alert("$admin")</script>';
$admin = AdminController::login($NOMBRE, $PASS_ADMIN);
if($admin!=null){
$NOMBRE=$admin->getNOMBRE();
$TIENDA_idTIENDA=$admin->getTIENDA_idTIENDA()->getIdTIENDA();
setcookie("NOMBRE","$NOMBRE");
setcookie("TIENDA_idTIENDA","$TIENDA_idTIENDA");
echo '<script language="javascript">window.location="../../../front/home.html"</script>';
}else{
echo '<script language="javascript">window.location="../../../index.html"</script>';
}

//That´s all folks!