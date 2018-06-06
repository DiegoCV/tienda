<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hecho en sólo 6 días  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Ventas_has_productos.php';
require_once realpath("../..").'\dao\interfaz\IVentas_has_productosDao.php';
require_once realpath("../..").'\dto\Ventas.php';
require_once realpath("../..").'\dto\Productos.php';

class Ventas_has_productosController {

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
   * Crea un objeto Ventas_has_productos a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param vENTAS_idVENTAS
   * @param pRODUCTOS_idPRODUCTOS
   */
  public static function insert( $vENTAS_idVENTAS,  $pRODUCTOS_idPRODUCTOS){
      $ventas_has_productos = new Ventas_has_productos();
      $ventas_has_productos->setVENTAS_idVENTAS($vENTAS_idVENTAS); 
      $ventas_has_productos->setPRODUCTOS_idPRODUCTOS($pRODUCTOS_idPRODUCTOS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventas_has_productosDao =$FactoryDao->getventas_has_productosDao(self::getDataBaseDefault());
     $rtn = $ventas_has_productosDao->insert($ventas_has_productos);
     $ventas_has_productosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Ventas_has_productos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param vENTAS_idVENTAS
   * @param pRODUCTOS_idPRODUCTOS
   * @return El objeto en base de datos o Null
   */
  public static function select($vENTAS_idVENTAS, $pRODUCTOS_idPRODUCTOS){
      $ventas_has_productos = new Ventas_has_productos();
      $ventas_has_productos->setVENTAS_idVENTAS($vENTAS_idVENTAS); 
      $ventas_has_productos->setPRODUCTOS_idPRODUCTOS($pRODUCTOS_idPRODUCTOS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventas_has_productosDao =$FactoryDao->getventas_has_productosDao(self::getDataBaseDefault());
     $result = $ventas_has_productosDao->select($ventas_has_productos);
     $ventas_has_productosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Ventas_has_productos  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param vENTAS_idVENTAS
   * @param pRODUCTOS_idPRODUCTOS
   */
  public static function update($vENTAS_idVENTAS, $pRODUCTOS_idPRODUCTOS){
      $ventas_has_productos = self::select($vENTAS_idVENTAS, $pRODUCTOS_idPRODUCTOS);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventas_has_productosDao =$FactoryDao->getventas_has_productosDao(self::getDataBaseDefault());
     $ventas_has_productosDao->update($ventas_has_productos);
     $ventas_has_productosDao->close();
  }

  /**
   * Elimina un objeto Ventas_has_productos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param vENTAS_idVENTAS
   * @param pRODUCTOS_idPRODUCTOS
   */
  public static function delete($vENTAS_idVENTAS, $pRODUCTOS_idPRODUCTOS){
      $ventas_has_productos = new Ventas_has_productos();
      $ventas_has_productos->setVENTAS_idVENTAS($vENTAS_idVENTAS); 
      $ventas_has_productos->setPRODUCTOS_idPRODUCTOS($pRODUCTOS_idPRODUCTOS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventas_has_productosDao =$FactoryDao->getventas_has_productosDao(self::getDataBaseDefault());
     $ventas_has_productosDao->delete($ventas_has_productos);
     $ventas_has_productosDao->close();
  }

  /**
   * Lista todos los objetos Ventas_has_productos de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Ventas_has_productos en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventas_has_productosDao =$FactoryDao->getventas_has_productosDao(self::getDataBaseDefault());
     $result = $ventas_has_productosDao->listAll();
     $ventas_has_productosDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Ventas_has_productos de la base de datos a partir de VENTAS_idVENTAS.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param vENTAS_idVENTAS
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByVENTAS_idVENTAS($vENTAS_idVENTAS){
      $ventas_has_productos = new Ventas_has_productos();
      $ventas_has_productos->setVENTAS_idVENTAS($vENTAS_idVENTAS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventas_has_productosDao =$FactoryDao->getventas_has_productosDao(self::getDataBaseDefault());
     $result = $ventas_has_productosDao->listByVENTAS_idVENTAS($ventas_has_productos);
     $ventas_has_productosDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Ventas_has_productos de la base de datos a partir de PRODUCTOS_idPRODUCTOS.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param pRODUCTOS_idPRODUCTOS
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByPRODUCTOS_idPRODUCTOS($pRODUCTOS_idPRODUCTOS){
      $ventas_has_productos = new Ventas_has_productos();
      $ventas_has_productos->setPRODUCTOS_idPRODUCTOS($pRODUCTOS_idPRODUCTOS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $ventas_has_productosDao =$FactoryDao->getventas_has_productosDao(self::getDataBaseDefault());
     $result = $ventas_has_productosDao->listByPRODUCTOS_idPRODUCTOS($ventas_has_productos);
     $ventas_has_productosDao->close();
     return $result;
  }


}
//That´s all folks!