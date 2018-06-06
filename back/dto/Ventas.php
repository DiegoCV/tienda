<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo.   \\


class Ventas {

  private $idVENTAS;
  private $IVA_VENTAS;
  private $FECHACOMPRA_VENTAS;
  private $CLIENTES_idCLIENTES;
  private $VENDEDOR_idVENDEDOR;

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
     * Devuelve el valor correspondiente a CLIENTES_idCLIENTES
     * @return CLIENTES_idCLIENTES
     */
  public function getCLIENTES_idCLIENTES(){
      return $this->CLIENTES_idCLIENTES;
  }

    /**
     * Modifica el valor correspondiente a CLIENTES_idCLIENTES
     * @param CLIENTES_idCLIENTES
     */
  public function setCLIENTES_idCLIENTES($cLIENTES_idCLIENTES){
      $this->CLIENTES_idCLIENTES = $cLIENTES_idCLIENTES;
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


}
//That´s all folks!