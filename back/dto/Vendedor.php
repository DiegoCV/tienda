<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Cuando uses Anarchy, Georgie, tú también flotarás  \\


class Vendedor {

  private $idVENDEDOR;
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