<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Por desgracia, mi epitafio ser� una frase insulsa y vac�a  \\
include_once realpath('../../innerController/CategoriaController.php');

$idCATEGORIA = $_POST['idCATEGORIA'];
$DESCRIPCION = $_POST['DESCRIPCION'];
CategoriaController::insert($idCATEGORIA, $DESCRIPCION);
echo "true";

//That�s all folks!