<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    In Anarchy we trust  \\


class Clientes_has_ventas {

  private $CLIENTES_idCLIENTES;
  private $CLIENTES_TIENDA_idTIENDA;
  private $VENTAS_idVENTAS;

    /**
     * Constructor de Clientes_has_ventas
    */
     public function __construct(){}

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
     * Devuelve el valor correspondiente a CLIENTES_TIENDA_idTIENDA
     * @return CLIENTES_TIENDA_idTIENDA
     */
  public function getCLIENTES_TIENDA_idTIENDA(){
      return $this->CLIENTES_TIENDA_idTIENDA;
  }

    /**
     * Modifica el valor correspondiente a CLIENTES_TIENDA_idTIENDA
     * @param CLIENTES_TIENDA_idTIENDA
     */
  public function setCLIENTES_TIENDA_idTIENDA($cLIENTES_TIENDA_idTIENDA){
      $this->CLIENTES_TIENDA_idTIENDA = $cLIENTES_TIENDA_idTIENDA;
  }
    /**
     * Devuelve el valor correspondiente a VENTAS_idVENTAS
     * @return VENTAS_idVENTAS
     */
  public function getVENTAS_idVENTAS(){
      return $this->VENTAS_idVENTAS;
  }

    /**
     * Modifica el valor correspondiente a VENTAS_idVENTAS
     * @param VENTAS_idVENTAS
     */
  public function setVENTAS_idVENTAS($vENTAS_idVENTAS){
      $this->VENTAS_idVENTAS = $vENTAS_idVENTAS;
  }


}
//That´s all folks!