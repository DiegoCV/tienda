<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Has escuchado hablar del grandioso señor Arciniegas?  \\


class Ventas {

  private $idVENTAS;
  private $IVA_VENTAS;
  private $IMPUESTOCONSUMO_VENTAS;
  private $FECHACOMPRA_VENTAS;
  private $VENDEDOR_idVENDEDOR;
  private $VENDEDOR_TIENDA_idTIENDA;

    /**
     * Constructor de Ventas
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idVENTAS
     * @return idVENTAS
     */
  public function getIdVENTAS(){
      return $this->idVENTAS;
  }

    /**
     * Modifica el valor correspondiente a idVENTAS
     * @param idVENTAS
     */
  public function setIdVENTAS($idVENTAS){
      $this->idVENTAS = $idVENTAS;
  }
    /**
     * Devuelve el valor correspondiente a IVA_VENTAS
     * @return IVA_VENTAS
     */
  public function getIVA_VENTAS(){
      return $this->IVA_VENTAS;
  }

    /**
     * Modifica el valor correspondiente a IVA_VENTAS
     * @param IVA_VENTAS
     */
  public function setIVA_VENTAS($iVA_VENTAS){
      $this->IVA_VENTAS = $iVA_VENTAS;
  }
    /**
     * Devuelve el valor correspondiente a IMPUESTOCONSUMO_VENTAS
     * @return IMPUESTOCONSUMO_VENTAS
     */
  public function getIMPUESTOCONSUMO_VENTAS(){
      return $this->IMPUESTOCONSUMO_VENTAS;
  }

    /**
     * Modifica el valor correspondiente a IMPUESTOCONSUMO_VENTAS
     * @param IMPUESTOCONSUMO_VENTAS
     */
  public function setIMPUESTOCONSUMO_VENTAS($iMPUESTOCONSUMO_VENTAS){
      $this->IMPUESTOCONSUMO_VENTAS = $iMPUESTOCONSUMO_VENTAS;
  }
    /**
     * Devuelve el valor correspondiente a FECHACOMPRA_VENTAS
     * @return FECHACOMPRA_VENTAS
     */
  public function getFECHACOMPRA_VENTAS(){
      return $this->FECHACOMPRA_VENTAS;
  }

    /**
     * Modifica el valor correspondiente a FECHACOMPRA_VENTAS
     * @param FECHACOMPRA_VENTAS
     */
  public function setFECHACOMPRA_VENTAS($fECHACOMPRA_VENTAS){
      $this->FECHACOMPRA_VENTAS = $fECHACOMPRA_VENTAS;
  }
    /**
     * Devuelve el valor correspondiente a VENDEDOR_idVENDEDOR
     * @return VENDEDOR_idVENDEDOR
     */
  public function getVENDEDOR_idVENDEDOR(){
      return $this->VENDEDOR_idVENDEDOR;
  }

    /**
     * Modifica el valor correspondiente a VENDEDOR_idVENDEDOR
     * @param VENDEDOR_idVENDEDOR
     */
  public function setVENDEDOR_idVENDEDOR($vENDEDOR_idVENDEDOR){
      $this->VENDEDOR_idVENDEDOR = $vENDEDOR_idVENDEDOR;
  }
    /**
     * Devuelve el valor correspondiente a VENDEDOR_TIENDA_idTIENDA
     * @return VENDEDOR_TIENDA_idTIENDA
     */
  public function getVENDEDOR_TIENDA_idTIENDA(){
      return $this->VENDEDOR_TIENDA_idTIENDA;
  }

    /**
     * Modifica el valor correspondiente a VENDEDOR_TIENDA_idTIENDA
     * @param VENDEDOR_TIENDA_idTIENDA
     */
  public function setVENDEDOR_TIENDA_idTIENDA($vENDEDOR_TIENDA_idTIENDA){
      $this->VENDEDOR_TIENDA_idTIENDA = $vENDEDOR_TIENDA_idTIENDA;
  }


}
//That´s all folks!