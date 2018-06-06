<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Si mi madre entendiera mi código, estaría orgullosa  \\


class Tienda {

  private $idTIENDA;
  private $NOMBRE_TIENDA;
  private $DIERECCION_TIENDA;
  private $NIT_TIENDA;
  private $DIRECCION_TIENDA;
  private $ADMINISTRADOR_idADMINISTRADOR;

    /**
     * Constructor de Tienda
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idTIENDA
     * @return idTIENDA
     */
  public function getIdTIENDA(){
      return $this->idTIENDA;
  }

    /**
     * Modifica el valor correspondiente a idTIENDA
     * @param idTIENDA
     */
  public function setIdTIENDA($idTIENDA){
      $this->idTIENDA = $idTIENDA;
  }
    /**
     * Devuelve el valor correspondiente a NOMBRE_TIENDA
     * @return NOMBRE_TIENDA
     */
  public function getNOMBRE_TIENDA(){
      return $this->NOMBRE_TIENDA;
  }

    /**
     * Modifica el valor correspondiente a NOMBRE_TIENDA
     * @param NOMBRE_TIENDA
     */
  public function setNOMBRE_TIENDA($nOMBRE_TIENDA){
      $this->NOMBRE_TIENDA = $nOMBRE_TIENDA;
  }
    /**
     * Devuelve el valor correspondiente a DIERECCION_TIENDA
     * @return DIERECCION_TIENDA
     */
  public function getDIERECCION_TIENDA(){
      return $this->DIERECCION_TIENDA;
  }

    /**
     * Modifica el valor correspondiente a DIERECCION_TIENDA
     * @param DIERECCION_TIENDA
     */
  public function setDIERECCION_TIENDA($dIERECCION_TIENDA){
      $this->DIERECCION_TIENDA = $dIERECCION_TIENDA;
  }
    /**
     * Devuelve el valor correspondiente a NIT_TIENDA
     * @return NIT_TIENDA
     */
  public function getNIT_TIENDA(){
      return $this->NIT_TIENDA;
  }

    /**
     * Modifica el valor correspondiente a NIT_TIENDA
     * @param NIT_TIENDA
     */
  public function setNIT_TIENDA($nIT_TIENDA){
      $this->NIT_TIENDA = $nIT_TIENDA;
  }
    /**
     * Devuelve el valor correspondiente a DIRECCION_TIENDA
     * @return DIRECCION_TIENDA
     */
  public function getDIRECCION_TIENDA(){
      return $this->DIRECCION_TIENDA;
  }

    /**
     * Modifica el valor correspondiente a DIRECCION_TIENDA
     * @param DIRECCION_TIENDA
     */
  public function setDIRECCION_TIENDA($dIRECCION_TIENDA){
      $this->DIRECCION_TIENDA = $dIRECCION_TIENDA;
  }
    /**
     * Devuelve el valor correspondiente a ADMINISTRADOR_idADMINISTRADOR
     * @return ADMINISTRADOR_idADMINISTRADOR
     */
  public function getADMINISTRADOR_idADMINISTRADOR(){
      return $this->ADMINISTRADOR_idADMINISTRADOR;
  }

    /**
     * Modifica el valor correspondiente a ADMINISTRADOR_idADMINISTRADOR
     * @param ADMINISTRADOR_idADMINISTRADOR
     */
  public function setADMINISTRADOR_idADMINISTRADOR($aDMINISTRADOR_idADMINISTRADOR){
      $this->ADMINISTRADOR_idADMINISTRADOR = $aDMINISTRADOR_idADMINISTRADOR;
  }


}
//That´s all folks!