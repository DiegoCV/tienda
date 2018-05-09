<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    -¡UNO! -¡¡ +4 !!  \\


class Clientes {

  private $idCLIENTES;
  private $NOMBRE_CLIENTES;
  private $DIRECCION_CLIENTES;
  private $FECHANACIMIENTO_CLIENTES;
  private $EMAIL_CLIENTES;
  private $TIENDA_idTIENDA;

    /**
     * Constructor de Clientes
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idCLIENTES
     * @return idCLIENTES
     */
  public function getIdCLIENTES(){
      return $this->idCLIENTES;
  }

    /**
     * Modifica el valor correspondiente a idCLIENTES
     * @param idCLIENTES
     */
  public function setIdCLIENTES($idCLIENTES){
      $this->idCLIENTES = $idCLIENTES;
  }
    /**
     * Devuelve el valor correspondiente a NOMBRE_CLIENTES
     * @return NOMBRE_CLIENTES
     */
  public function getNOMBRE_CLIENTES(){
      return $this->NOMBRE_CLIENTES;
  }

    /**
     * Modifica el valor correspondiente a NOMBRE_CLIENTES
     * @param NOMBRE_CLIENTES
     */
  public function setNOMBRE_CLIENTES($nOMBRE_CLIENTES){
      $this->NOMBRE_CLIENTES = $nOMBRE_CLIENTES;
  }
    /**
     * Devuelve el valor correspondiente a DIRECCION_CLIENTES
     * @return DIRECCION_CLIENTES
     */
  public function getDIRECCION_CLIENTES(){
      return $this->DIRECCION_CLIENTES;
  }

    /**
     * Modifica el valor correspondiente a DIRECCION_CLIENTES
     * @param DIRECCION_CLIENTES
     */
  public function setDIRECCION_CLIENTES($dIRECCION_CLIENTES){
      $this->DIRECCION_CLIENTES = $dIRECCION_CLIENTES;
  }
    /**
     * Devuelve el valor correspondiente a FECHANACIMIENTO_CLIENTES
     * @return FECHANACIMIENTO_CLIENTES
     */
  public function getFECHANACIMIENTO_CLIENTES(){
      return $this->FECHANACIMIENTO_CLIENTES;
  }

    /**
     * Modifica el valor correspondiente a FECHANACIMIENTO_CLIENTES
     * @param FECHANACIMIENTO_CLIENTES
     */
  public function setFECHANACIMIENTO_CLIENTES($fECHANACIMIENTO_CLIENTES){
      $this->FECHANACIMIENTO_CLIENTES = $fECHANACIMIENTO_CLIENTES;
  }
    /**
     * Devuelve el valor correspondiente a EMAIL_CLIENTES
     * @return EMAIL_CLIENTES
     */
  public function getEMAIL_CLIENTES(){
      return $this->EMAIL_CLIENTES;
  }

    /**
     * Modifica el valor correspondiente a EMAIL_CLIENTES
     * @param EMAIL_CLIENTES
     */
  public function setEMAIL_CLIENTES($eMAIL_CLIENTES){
      $this->EMAIL_CLIENTES = $eMAIL_CLIENTES;
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