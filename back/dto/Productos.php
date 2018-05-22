<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Por desgracia, mi epitafio será una frase insulsa y vacía  \\


class Productos {

  private $idPRODUCTOS;
  private $NOMBRE_PRODUCTO;
  private $UNIDAD_PRODUCTO;
  private $COSTO_PRODUCTO;
  private $PRECIOVENTA_PRODUCTO;
  private $VALORMINIMO_PRODUCTO;
  private $FECHAINGRESO_PRODUCTO;
  private $CATEGORIA_PRODUCTO;
  private $FECHAVENCIMIENTO_PRODUCTO;
  private $TIENDA_idTIENDA;
  private $CATEGORIA_idCATEGORIA;
  private $PROVEEDORES_idPROVEEDORES;
  private $PROVEEDORES_TIENDA_idTIENDA;

    /**
     * Constructor de Productos
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idPRODUCTOS
     * @return idPRODUCTOS
     */
  public function getIdPRODUCTOS(){
      return $this->idPRODUCTOS;
  }

    /**
     * Modifica el valor correspondiente a idPRODUCTOS
     * @param idPRODUCTOS
     */
  public function setIdPRODUCTOS($idPRODUCTOS){
      $this->idPRODUCTOS = $idPRODUCTOS;
  }
    /**
     * Devuelve el valor correspondiente a NOMBRE_PRODUCTO
     * @return NOMBRE_PRODUCTO
     */
  public function getNOMBRE_PRODUCTO(){
      return $this->NOMBRE_PRODUCTO;
  }

    /**
     * Modifica el valor correspondiente a NOMBRE_PRODUCTO
     * @param NOMBRE_PRODUCTO
     */
  public function setNOMBRE_PRODUCTO($nOMBRE_PRODUCTO){
      $this->NOMBRE_PRODUCTO = $nOMBRE_PRODUCTO;
  }
    /**
     * Devuelve el valor correspondiente a UNIDAD_PRODUCTO
     * @return UNIDAD_PRODUCTO
     */
  public function getUNIDAD_PRODUCTO(){
      return $this->UNIDAD_PRODUCTO;
  }

    /**
     * Modifica el valor correspondiente a UNIDAD_PRODUCTO
     * @param UNIDAD_PRODUCTO
     */
  public function setUNIDAD_PRODUCTO($uNIDAD_PRODUCTO){
      $this->UNIDAD_PRODUCTO = $uNIDAD_PRODUCTO;
  }
    /**
     * Devuelve el valor correspondiente a COSTO_PRODUCTO
     * @return COSTO_PRODUCTO
     */
  public function getCOSTO_PRODUCTO(){
      return $this->COSTO_PRODUCTO;
  }

    /**
     * Modifica el valor correspondiente a COSTO_PRODUCTO
     * @param COSTO_PRODUCTO
     */
  public function setCOSTO_PRODUCTO($cOSTO_PRODUCTO){
      $this->COSTO_PRODUCTO = $cOSTO_PRODUCTO;
  }
    /**
     * Devuelve el valor correspondiente a PRECIOVENTA_PRODUCTO
     * @return PRECIOVENTA_PRODUCTO
     */
  public function getPRECIOVENTA_PRODUCTO(){
      return $this->PRECIOVENTA_PRODUCTO;
  }

    /**
     * Modifica el valor correspondiente a PRECIOVENTA_PRODUCTO
     * @param PRECIOVENTA_PRODUCTO
     */
  public function setPRECIOVENTA_PRODUCTO($pRECIOVENTA_PRODUCTO){
      $this->PRECIOVENTA_PRODUCTO = $pRECIOVENTA_PRODUCTO;
  }
    /**
     * Devuelve el valor correspondiente a VALORMINIMO_PRODUCTO
     * @return VALORMINIMO_PRODUCTO
     */
  public function getVALORMINIMO_PRODUCTO(){
      return $this->VALORMINIMO_PRODUCTO;
  }

    /**
     * Modifica el valor correspondiente a VALORMINIMO_PRODUCTO
     * @param VALORMINIMO_PRODUCTO
     */
  public function setVALORMINIMO_PRODUCTO($vALORMINIMO_PRODUCTO){
      $this->VALORMINIMO_PRODUCTO = $vALORMINIMO_PRODUCTO;
  }
    /**
     * Devuelve el valor correspondiente a FECHAINGRESO_PRODUCTO
     * @return FECHAINGRESO_PRODUCTO
     */
  public function getFECHAINGRESO_PRODUCTO(){
      return $this->FECHAINGRESO_PRODUCTO;
  }

    /**
     * Modifica el valor correspondiente a FECHAINGRESO_PRODUCTO
     * @param FECHAINGRESO_PRODUCTO
     */
  public function setFECHAINGRESO_PRODUCTO($fECHAINGRESO_PRODUCTO){
      $this->FECHAINGRESO_PRODUCTO = $fECHAINGRESO_PRODUCTO;
  }
    /**
     * Devuelve el valor correspondiente a CATEGORIA_PRODUCTO
     * @return CATEGORIA_PRODUCTO
     */
  public function getCATEGORIA_PRODUCTO(){
      return $this->CATEGORIA_PRODUCTO;
  }

    /**
     * Modifica el valor correspondiente a CATEGORIA_PRODUCTO
     * @param CATEGORIA_PRODUCTO
     */
  public function setCATEGORIA_PRODUCTO($cATEGORIA_PRODUCTO){
      $this->CATEGORIA_PRODUCTO = $cATEGORIA_PRODUCTO;
  }
    /**
     * Devuelve el valor correspondiente a FECHAVENCIMIENTO_PRODUCTO
     * @return FECHAVENCIMIENTO_PRODUCTO
     */
  public function getFECHAVENCIMIENTO_PRODUCTO(){
      return $this->FECHAVENCIMIENTO_PRODUCTO;
  }

    /**
     * Modifica el valor correspondiente a FECHAVENCIMIENTO_PRODUCTO
     * @param FECHAVENCIMIENTO_PRODUCTO
     */
  public function setFECHAVENCIMIENTO_PRODUCTO($fECHAVENCIMIENTO_PRODUCTO){
      $this->FECHAVENCIMIENTO_PRODUCTO = $fECHAVENCIMIENTO_PRODUCTO;
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
    /**
     * Devuelve el valor correspondiente a CATEGORIA_idCATEGORIA
     * @return CATEGORIA_idCATEGORIA
     */
  public function getCATEGORIA_idCATEGORIA(){
      return $this->CATEGORIA_idCATEGORIA;
  }

    /**
     * Modifica el valor correspondiente a CATEGORIA_idCATEGORIA
     * @param CATEGORIA_idCATEGORIA
     */
  public function setCATEGORIA_idCATEGORIA($cATEGORIA_idCATEGORIA){
      $this->CATEGORIA_idCATEGORIA = $cATEGORIA_idCATEGORIA;
  }
    /**
     * Devuelve el valor correspondiente a PROVEEDORES_idPROVEEDORES
     * @return PROVEEDORES_idPROVEEDORES
     */
  public function getPROVEEDORES_idPROVEEDORES(){
      return $this->PROVEEDORES_idPROVEEDORES;
  }

    /**
     * Modifica el valor correspondiente a PROVEEDORES_idPROVEEDORES
     * @param PROVEEDORES_idPROVEEDORES
     */
  public function setPROVEEDORES_idPROVEEDORES($pROVEEDORES_idPROVEEDORES){
      $this->PROVEEDORES_idPROVEEDORES = $pROVEEDORES_idPROVEEDORES;
  }
    /**
     * Devuelve el valor correspondiente a PROVEEDORES_TIENDA_idTIENDA
     * @return PROVEEDORES_TIENDA_idTIENDA
     */
  public function getPROVEEDORES_TIENDA_idTIENDA(){
      return $this->PROVEEDORES_TIENDA_idTIENDA;
  }

    /**
     * Modifica el valor correspondiente a PROVEEDORES_TIENDA_idTIENDA
     * @param PROVEEDORES_TIENDA_idTIENDA
     */
  public function setPROVEEDORES_TIENDA_idTIENDA($pROVEEDORES_TIENDA_idTIENDA){
      $this->PROVEEDORES_TIENDA_idTIENDA = $pROVEEDORES_TIENDA_idTIENDA;
  }


}
//That´s all folks!