<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No se fije en el corte de cabello, soy mucho muy rico  \\

interface IConexion {

    /**     
     * Crea una conexi�n si no se ha establecido antes; en caso contrario, devuelve la ya existente
     * @param dbName Nombre de la base de datos que se desea conectar.
     * @return Conexi�n a base de datos dependiente del gestor en uso
     */
     public function obtener($dbName);
     /**
     * Cierra la conexi�n a la base de datos
     */
     public function cerrar();

}
//That�s all folks!