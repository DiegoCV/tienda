<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    404 Frase no encontrada  \\


class Proveedores {

  private $idPROVEEDORES;
  private $NOMBREEMPRESA_PROVEEDORES;
  private $NOMBREEMPLEADO_PROVEEDORES;
  private $DESCUENTO_PROVEEDOR;
  private $FECHAINGRESO_PROVEEDORES;
  private $TIENDA_idTIENDA;

    /**
     * Constructor de Proveedores
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idPROVEEDORES
     * @return idPROVEEDORES
     */
  public function getIdPROVEEDORES(){
      return $this->idPROVEEDORES;
  }

    /**
     * Modifica el valor correspondiente a idPROVEEDORES
     * @param idPROVEEDORES
     */
  public function setIdPROVEEDORES($idPROVEEDORES){
      $this->idPROVEEDORES = $idPROVEEDORES;
  }
    /**
     * Devuelve el valor correspondiente a NOMBREEMPRESA_PROVEEDORES
     * @return NOMBREEMPRESA_PROVEEDORES
     */
  public function getNOMBREEMPRESA_PROVEEDORES(){
      return $this->NOMBREEMPRESA_PROVEEDORES;
  }

    /**
     * Modifica el valor correspondiente a NOMBREEMPRESA_PROVEEDORES
     * @param NOMBREEMPRESA_PROVEEDORES
     */
  public function setNOMBREEMPRESA_PROVEEDORES($nOMBREEMPRESA_PROVEEDORES){
      $this->NOMBREEMPRESA_PROVEEDORES = $nOMBREEMPRESA_PROVEEDORES;
  }
    /**
     * Devuelve el valor correspondiente a NOMBREEMPLEADO_PROVEEDORES
     * @return NOMBREEMPLEADO_PROVEEDORES
     */
  public function getNOMBREEMPLEADO_PROVEEDORES(){
      return $this->NOMBREEMPLEADO_PROVEEDORES;
  }

    /**
     * Modifica el valor correspondiente a NOMBREEMPLEADO_PROVEEDORES
     * @param NOMBREEMPLEADO_PROVEEDORES
     */
  public function setNOMBREEMPLEADO_PROVEEDORES($nOMBREEMPLEADO_PROVEEDORES){
      $this->NOMBREEMPLEADO_PROVEEDORES = $nOMBREEMPLEADO_PROVEEDORES;
  }
    /**
     * Devuelve el valor correspondiente a DESCUENTO_PROVEEDOR
     * @return DESCUENTO_PROVEEDOR
     */
  public function getDESCUENTO_PROVEEDOR(){
      return $this->DESCUENTO_PROVEEDOR;
  }

    /**
     * Modifica el valor correspondiente a DESCUENTO_PROVEEDOR
     * @param DESCUENTO_PROVEEDOR
     */
  public function setDESCUENTO_PROVEEDOR($dESCUENTO_PROVEEDOR){
      $this->DESCUENTO_PROVEEDOR = $dESCUENTO_PROVEEDOR;
  }
    /**
     * Devuelve el valor correspondiente a FECHAINGRESO_PROVEEDORES
     * @return FECHAINGRESO_PROVEEDORES
     */
  public function getFECHAINGRESO_PROVEEDORES(){
      return $this->FECHAINGRESO_PROVEEDORES;
  }

    /**
     * Modifica el valor correspondiente a FECHAINGRESO_PROVEEDORES
     * @param FECHAINGRESO_PROVEEDORES
     */
  public function setFECHAINGRESO_PROVEEDORES($fECHAINGRESO_PROVEEDORES){
      $this->FECHAINGRESO_PROVEEDORES = $fECHAINGRESO_PROVEEDORES;
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