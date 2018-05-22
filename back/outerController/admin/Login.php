<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me arreglas mi impresora?  \\
include_once realpath('../../innerController/AdminController.php');

$idADMIN = $_POST['idADMIN'];
$PASS_ADMIN = $_POST['PASS_ADMIN'];
echo '<script language="javascript">alert("$admin")</script>';
$admin = AdminController::login($idADMIN, $PASS_ADMIN);
if($admin!=null){
$idADMIN=$admin->getIdADMIN();
$TIENDA_idTIENDA=$admin->getTIENDA_idTIENDA()->getIdTIENDA();
setcookie("idADMIN","$idADMIN");
setcookie("TIENDA_idTIENDA","$TIENDA_idTIENDA");
echo '<script language="javascript">window.location="../../../front/Main.html"</script>';
}else{
echo '<script language="javascript">window.location="../../../index.html"</script>';
}

//That´s all folks!