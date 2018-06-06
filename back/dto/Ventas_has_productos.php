<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Me ayudas con la tesis?  \\


class Ventas_has_productos {

  private $VENTAS_idVENTAS;
  private $PRODUCTOS_idPRODUCTOS;

    /**
     * Constructor de Ventas_has_productos
    */
     public function __construct(){}

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
    /**
     * Devuelve el valor correspondiente a PRODUCTOS_idPRODUCTOS
     * @return PRODUCTOS_idPRODUCTOS
     */
  public function getPRODUCTOS_idPRODUCTOS(){
      return $this->PRODUCTOS_idPRODUCTOS;
  }

    /**
     * Modifica el valor correspondiente a PRODUCTOS_idPRODUCTOS
     * @param PRODUCTOS_idPRODUCTOS
     */
  public function setPRODUCTOS_idPRODUCTOS($pRODUCTOS_idPRODUCTOS){
      $this->PRODUCTOS_idPRODUCTOS = $pRODUCTOS_idPRODUCTOS;
  }


}
//That´s all folks!