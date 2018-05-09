<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\


class Admin {

  private $idADMIN;
  private $NOMBRE;
  private $APELLIDO;
  private $PASS_ADMIN;
  private $DIRECCION;
  private $FECHANACIMIENTO;
  private $FECHAINGRESO;
  private $TIENDA_idTIENDA;

    /**
     * Constructor de Admin
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idADMIN
     * @return idADMIN
     */
  public function getIdADMIN(){
      return $this->idADMIN;
  }

    /**
     * Modifica el valor correspondiente a idADMIN
     * @param idADMIN
     */
  public function setIdADMIN($idADMIN){
      $this->idADMIN = $idADMIN;
  }
    /**
     * Devuelve el valor correspondiente a NOMBRE
     * @return NOMBRE
     */
  public function getNOMBRE(){
      return $this->NOMBRE;
  }

    /**
     * Modifica el valor correspondiente a NOMBRE
     * @param NOMBRE
     */
  public function setNOMBRE($nOMBRE){
      $this->NOMBRE = $nOMBRE;
  }
    /**
     * Devuelve el valor correspondiente a APELLIDO
     * @return APELLIDO
     */
  public function getAPELLIDO(){
      return $this->APELLIDO;
  }

    /**
     * Modifica el valor correspondiente a APELLIDO
     * @param APELLIDO
     */
  public function setAPELLIDO($aPELLIDO){
      $this->APELLIDO = $aPELLIDO;
  }
    /**
     * Devuelve el valor correspondiente a PASS_ADMIN
     * @return PASS_ADMIN
     */
  public function getPASS_ADMIN(){
      return $this->PASS_ADMIN;
  }

    /**
     * Modifica el valor correspondiente a PASS_ADMIN
     * @param PASS_ADMIN
     */
  public function setPASS_ADMIN($pASS_ADMIN){
      $this->PASS_ADMIN = $pASS_ADMIN;
  }
    /**
     * Devuelve el valor correspondiente a DIRECCION
     * @return DIRECCION
     */
  public function getDIRECCION(){
      return $this->DIRECCION;
  }

    /**
     * Modifica el valor correspondiente a DIRECCION
     * @param DIRECCION
     */
  public function setDIRECCION($dIRECCION){
      $this->DIRECCION = $dIRECCION;
  }
    /**
     * Devuelve el valor correspondiente a FECHANACIMIENTO
     * @return FECHANACIMIENTO
     */
  public function getFECHANACIMIENTO(){
      return $this->FECHANACIMIENTO;
  }

    /**
     * Modifica el valor correspondiente a FECHANACIMIENTO
     * @param FECHANACIMIENTO
     */
  public function setFECHANACIMIENTO($fECHANACIMIENTO){
      $this->FECHANACIMIENTO = $fECHANACIMIENTO;
  }
    /**
     * Devuelve el valor correspondiente a FECHAINGRESO
     * @return FECHAINGRESO
     */
  public function getFECHAINGRESO(){
      return $this->FECHAINGRESO;
  }

    /**
     * Modifica el valor correspondiente a FECHAINGRESO
     * @param FECHAINGRESO
     */
  public function setFECHAINGRESO($fECHAINGRESO){
      $this->FECHAINGRESO = $fECHAINGRESO;
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