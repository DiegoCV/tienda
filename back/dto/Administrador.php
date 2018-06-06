<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando Gregorio Samsa se despertó una mañana después de un sueño intranquilo, se encontró sobre su cama convertido en un monstruoso insecto.  \\


class Administrador {

  private $idADMINISTRADOR;
  private $NOMBRE;
  private $APELLIDO;
  private $USUARIO;
  private $PASS;

    /**
     * Constructor de Administrador
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idADMINISTRADOR
     * @return idADMINISTRADOR
     */
  public function getIdADMINISTRADOR(){
      return $this->idADMINISTRADOR;
  }

    /**
     * Modifica el valor correspondiente a idADMINISTRADOR
     * @param idADMINISTRADOR
     */
  public function setIdADMINISTRADOR($idADMINISTRADOR){
      $this->idADMINISTRADOR = $idADMINISTRADOR;
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
     * Devuelve el valor correspondiente a USUARIO
     * @return USUARIO
     */
  public function getUSUARIO(){
      return $this->USUARIO;
  }

    /**
     * Modifica el valor correspondiente a USUARIO
     * @param USUARIO
     */
  public function setUSUARIO($uSUARIO){
      $this->USUARIO = $uSUARIO;
  }
    /**
     * Devuelve el valor correspondiente a PASS
     * @return PASS
     */
  public function getPASS(){
      return $this->PASS;
  }

    /**
     * Modifica el valor correspondiente a PASS
     * @param PASS
     */
  public function setPASS($pASS){
      $this->PASS = $pASS;
  }


}
//That´s all folks!