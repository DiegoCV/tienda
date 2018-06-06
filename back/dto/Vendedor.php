<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Pero el ruiseñor no respondió; yacía muerto sobre las altas hierbas, con el corazón traspasado de espinas.  \\


class Vendedor {

  private $idVENDEDOR;
  private $NOMBRE_VENDEDOR;
  private $USUARIO_VENDEDOR;
  private $PASS_VENDEDOR;
  private $TIENDA_idTIENDA;

    /**
     * Constructor de Vendedor
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idVENDEDOR
     * @return idVENDEDOR
     */
  public function getIdVENDEDOR(){
      return $this->idVENDEDOR;
  }

    /**
     * Modifica el valor correspondiente a idVENDEDOR
     * @param idVENDEDOR
     */
  public function setIdVENDEDOR($idVENDEDOR){
      $this->idVENDEDOR = $idVENDEDOR;
  }
    /**
     * Devuelve el valor correspondiente a NOMBRE_VENDEDOR
     * @return NOMBRE_VENDEDOR
     */
  public function getNOMBRE_VENDEDOR(){
      return $this->NOMBRE_VENDEDOR;
  }

    /**
     * Modifica el valor correspondiente a NOMBRE_VENDEDOR
     * @param NOMBRE_VENDEDOR
     */
  public function setNOMBRE_VENDEDOR($nOMBRE_VENDEDOR){
      $this->NOMBRE_VENDEDOR = $nOMBRE_VENDEDOR;
  }
    /**
     * Devuelve el valor correspondiente a USUARIO_VENDEDOR
     * @return USUARIO_VENDEDOR
     */
  public function getUSUARIO_VENDEDOR(){
      return $this->USUARIO_VENDEDOR;
  }

    /**
     * Modifica el valor correspondiente a USUARIO_VENDEDOR
     * @param USUARIO_VENDEDOR
     */
  public function setUSUARIO_VENDEDOR($uSUARIO_VENDEDOR){
      $this->USUARIO_VENDEDOR = $uSUARIO_VENDEDOR;
  }
    /**
     * Devuelve el valor correspondiente a PASS_VENDEDOR
     * @return PASS_VENDEDOR
     */
  public function getPASS_VENDEDOR(){
      return $this->PASS_VENDEDOR;
  }

    /**
     * Modifica el valor correspondiente a PASS_VENDEDOR
     * @param PASS_VENDEDOR
     */
  public function setPASS_VENDEDOR($pASS_VENDEDOR){
      $this->PASS_VENDEDOR = $pASS_VENDEDOR;
  }
    /**
     * Devuelve el valor correspondiente a TIENDA_idTIENDA
     * @return TIENDA_idTIENDA
     */
  public function getTIENDA_idTIENDA(){
      return $this->TIENDA_idTIENDA;
  }

    /**
     * Modifica el valor correspondiente a TIENDA_idTIENDA
     * @param TIENDA_idTIENDA
     */
  public function setTIENDA_idTIENDA($tIENDA_idTIENDA){
      $this->TIENDA_idTIENDA = $tIENDA_idTIENDA;
  }


}
//That´s all folks!