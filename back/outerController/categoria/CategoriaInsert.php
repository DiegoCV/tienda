<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿Eres capaz de hackear mi Facebook?  \\
include_once realpath('../../innerController/CategoriaController.php');

$idCATEGORIA = $_POST['idCATEGORIA'];
$DESCRIPCION = $_POST['DESCRIPCION'];
CategoriaController::insert($idCATEGORIA, $DESCRIPCION);
echo "true";

//That´s all folks!