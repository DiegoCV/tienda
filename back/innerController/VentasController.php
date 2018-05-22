<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Para entender la recursividad, primero debes entender la recursividad  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Ventas.php';
require_once realpath("../..").'\dao\interfaz\IVentasDao.php';
require_once realpath("../..").'\dto\Vendedor.php';
require_once realpath("../..").'\dto\Vendedor.php';

class VentasController {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Ventas a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENTAS
   * @param iVA_VENTAS
   * @param iMPUESTOCONSUMO_VENTAS
   * @param fECHACOMPRA_VENTAS
   * @param vENDEDOR_idVENDEDOR
   * @param vENDEDOR_TIENDA_idTIENDA
   */
  public static function insert( $idVENTAS,  $iVA_VENTAS,  $iMPUESTOCONSUMO_VENTAS,  $fECHACOMPRA_VENTAS,  $vENDEDOR_idVENDEDOR,  $vENDEDOR_TIENDA_idTIENDA){
      $ventas = new Ventas();
      $ventas->setIdVENTAS($idVENTAS); 
      $ventas->setIVA_VENTAS($iVA_VENTAS); 
      $ventas->setIMPUESTOCONSUMO_VENTAS($iMPUESTOCONSUMO_VENTAS); 
      $ventas->setFECHACOMPRA_VENTAS($fECHACOMPRA_VENTAS); 
      $ventas->setVENDEDOR_idVENDEDOR($vENDEDOR_idVENDEDOR); 
      $ventas->setVENDEDOR_TIENDA_idTIENDA($vENDEDOR_TIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventasDao =$FactoryDao->getventasDao(self::getDataBaseDefault());
     $rtn = $ventasDao->insert($ventas);
     $ventasDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Ventas de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENTAS
   * @param vENDEDOR_idVENDEDOR
   * @param vENDEDOR_TIENDA_idTIENDA
   * @return El objeto en base de datos o Null
   */
  public static function select($idVENTAS, $vENDEDOR_idVENDEDOR, $vENDEDOR_TIENDA_idTIENDA){
      $ventas = new Ventas();
      $ventas->setIdVENTAS($idVENTAS); 
      $ventas->setVENDEDOR_idVENDEDOR($vENDEDOR_idVENDEDOR); 
      $ventas->setVENDEDOR_TIENDA_idTIENDA($vENDEDOR_TIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventasDao =$FactoryDao->getventasDao(self::getDataBaseDefault());
     $result = $ventasDao->select($ventas);
     $ventasDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Ventas  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENTAS
   * @param iVA_VENTAS
   * @param iMPUESTOCONSUMO_VENTAS
   * @param fECHACOMPRA_VENTAS
   * @param vENDEDOR_idVENDEDOR
   * @param vENDEDOR_TIENDA_idTIENDA
   */
  public static function update($idVENTAS, $iVA_VENTAS, $iMPUESTOCONSUMO_VENTAS, $fECHACOMPRA_VENTAS, $vENDEDOR_idVENDEDOR, $vENDEDOR_TIENDA_idTIENDA){
      $ventas = self::select($idVENTAS, $vENDEDOR_idVENDEDOR, $vENDEDOR_TIENDA_idTIENDA);
      $ventas->setIVA_VENTAS($iVA_VENTAS); 
      $ventas->setIMPUESTOCONSUMO_VENTAS($iMPUESTOCONSUMO_VENTAS); 
      $ventas->setFECHACOMPRA_VENTAS($fECHACOMPRA_VENTAS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventasDao =$FactoryDao->getventasDao(self::getDataBaseDefault());
     $ventasDao->update($ventas);
     $ventasDao->close();
  }

  /**
   * Elimina un objeto Ventas de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENTAS
   * @param vENDEDOR_idVENDEDOR
   * @param vENDEDOR_TIENDA_idTIENDA
   */
  public static function delete($idVENTAS, $vENDEDOR_idVENDEDOR, $vENDEDOR_TIENDA_idTIENDA){
      $ventas = new Ventas();
      $ventas->setIdVENTAS($idVENTAS); 
      $ventas->setVENDEDOR_idVENDEDOR($vENDEDOR_idVENDEDOR); 
      $ventas->setVENDEDOR_TIENDA_idTIENDA($vENDEDOR_TIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventasDao =$FactoryDao->getventasDao(self::getDataBaseDefault());
     $ventasDao->delete($ventas);
     $ventasDao->close();
  }

  /**
   * Lista todos los objetos Ventas de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Ventas en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventasDao =$FactoryDao->getventasDao(self::getDataBaseDefault());
     $result = $ventasDao->listAll();
     $ventasDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Ventas de la base de datos a partir de idVENTAS.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENTAS
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByIdVENTAS($idVENTAS){
      $ventas = new Ventas();
      $ventas->setIdVENTAS($idVENTAS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventasDao =$FactoryDao->getventasDao(self::getDataBaseDefault());
     $result = $ventasDao->listByIdVENTAS($ventas);
     $ventasDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Ventas de la base de datos a partir de VENDEDOR_idVENDEDOR.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param vENDEDOR_idVENDEDOR
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByVENDEDOR_idVENDEDOR($vENDEDOR_idVENDEDOR){
      $ventas = new Ventas();
      $ventas->setVENDEDOR_idVENDEDOR($vENDEDOR_idVENDEDOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventasDao =$FactoryDao->getventasDao(self::getDataBaseDefault());
     $result = $ventasDao->listByVENDEDOR_idVENDEDOR($ventas);
     $ventasDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Ventas de la base de datos a partir de VENDEDOR_TIENDA_idTIENDA.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param vENDEDOR_TIENDA_idTIENDA
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByVENDEDOR_TIENDA_idTIENDA($vENDEDOR_TIENDA_idTIENDA){
      $ventas = new Ventas();
      $ventas->setVENDEDOR_TIENDA_idTIENDA($vENDEDOR_TIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventasDao =$FactoryDao->getventasDao(self::getDataBaseDefault());
     $result = $ventasDao->listByVENDEDOR_TIENDA_idTIENDA($ventas);
     $ventasDao->close();
     return $result;
  }


}
//That´s all folks!