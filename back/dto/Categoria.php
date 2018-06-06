<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    No hay de qué so no más de papa  \\


class Categoria {

  private $idCATEGORIA;
  private $NOMBRE_CATEGORIA;

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
     * Devuelve el valor correspondiente a NOMBRE_CATEGORIA
     * @return NOMBRE_CATEGORIA
     */
  public function getNOMBRE_CATEGORIA(){
      return $this->NOMBRE_CATEGORIA;
  }

    /**
     * Modifica el valor correspondiente a NOMBRE_CATEGORIA
     * @param NOMBRE_CATEGORIA
     */
  public function setNOMBRE_CATEGORIA($nOMBRE_CATEGORIA){
      $this->NOMBRE_CATEGORIA = $nOMBRE_CATEGORIA;
  }


}
//That´s all folks!