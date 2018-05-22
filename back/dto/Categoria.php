<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿No es más sencillo hacer todo en el Main?  \\


class Categoria {

  private $idCATEGORIA;
  private $DESCRIPCION;

    /**
     * Constructor de Categoria
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idCATEGORIA
     * @return idCATEGORIA
     */
  public function getIdCATEGORIA(){
      return $this->idCATEGORIA;
  }

    /**
     * Modifica el valor correspondiente a idCATEGORIA
     * @param idCATEGORIA
     */
  public function setIdCATEGORIA($idCATEGORIA){
      $this->idCATEGORIA = $idCATEGORIA;
  }
    /**
     * Devuelve el valor correspondiente a DESCRIPCION
     * @return DESCRIPCION
     */
  public function getDESCRIPCION(){
      return $this->DESCRIPCION;
  }

    /**
     * Modifica el valor correspondiente a DESCRIPCION
     * @param DESCRIPCION
     */
  public function setDESCRIPCION($dESCRIPCION){
      $this->DESCRIPCION = $dESCRIPCION;
  }


}
//That´s all folks!