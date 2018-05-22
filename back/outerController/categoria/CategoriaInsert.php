<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Por desgracia, mi epitafio será una frase insulsa y vacía  \\
include_once realpath('../../innerController/CategoriaController.php');

$idCATEGORIA = $_POST['idCATEGORIA'];
$DESCRIPCION = $_POST['DESCRIPCION'];
CategoriaController::insert($idCATEGORIA, $DESCRIPCION);
echo "true";

//That´s all folks!