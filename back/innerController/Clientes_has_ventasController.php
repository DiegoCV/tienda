<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ya no la quiero, es cierto, pero tal vez la quiero. Es tan corto el amor, y es tan largo el olvido.  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Clientes_has_ventas.php';
require_once realpath("../..").'\dao\interfaz\IClientes_has_ventasDao.php';
require_once realpath("../..").'\dto\Clientes.php';
require_once realpath("../..").'\dto\Clientes.php';
require_once realpath("../..").'\dto\Ventas.php';

class Clientes_has_ventasController {

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
   * Crea un objeto Clientes_has_ventas a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cLIENTES_idCLIENTES
   * @param cLIENTES_TIENDA_idTIENDA
   * @param vENTAS_idVENTAS
   */
  public static function insert( $cLIENTES_idCLIENTES,  $cLIENTES_TIENDA_idTIENDA,  $vENTAS_idVENTAS){
      $clientes_has_ventas = new Clientes_has_ventas();
      $clientes_has_ventas->setCLIENTES_idCLIENTES($cLIENTES_idCLIENTES); 
      $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($cLIENTES_TIENDA_idTIENDA); 
      $clientes_has_ventas->setVENTAS_idVENTAS($vENTAS_idVENTAS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientes_has_ventasDao =$FactoryDao->getclientes_has_ventasDao(self::getDataBaseDefault());
     $rtn = $clientes_has_ventasDao->insert($clientes_has_ventas);
     $clientes_has_ventasDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Clientes_has_ventas de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cLIENTES_idCLIENTES
   * @param cLIENTES_TIENDA_idTIENDA
   * @param vENTAS_idVENTAS
   * @return El objeto en base de datos o Null
   */
  public static function select($cLIENTES_idCLIENTES, $cLIENTES_TIENDA_idTIENDA, $vENTAS_idVENTAS){
      $clientes_has_ventas = new Clientes_has_ventas();
      $clientes_has_ventas->setCLIENTES_idCLIENTES($cLIENTES_idCLIENTES); 
      $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($cLIENTES_TIENDA_idTIENDA); 
      $clientes_has_ventas->setVENTAS_idVENTAS($vENTAS_idVENTAS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientes_has_ventasDao =$FactoryDao->getclientes_has_ventasDao(self::getDataBaseDefault());
     $result = $clientes_has_ventasDao->select($clientes_has_ventas);
     $clientes_has_ventasDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Clientes_has_ventas  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cLIENTES_idCLIENTES
   * @param cLIENTES_TIENDA_idTIENDA
   * @param vENTAS_idVENTAS
   */
  public static function update($cLIENTES_idCLIENTES, $cLIENTES_TIENDA_idTIENDA, $vENTAS_idVENTAS){
      $clientes_has_ventas = self::select($cLIENTES_idCLIENTES, $cLIENTES_TIENDA_idTIENDA, $vENTAS_idVENTAS);

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientes_has_ventasDao =$FactoryDao->getclientes_has_ventasDao(self::getDataBaseDefault());
     $clientes_has_ventasDao->update($clientes_has_ventas);
     $clientes_has_ventasDao->close();
  }

  /**
   * Elimina un objeto Clientes_has_ventas de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cLIENTES_idCLIENTES
   * @param cLIENTES_TIENDA_idTIENDA
   * @param vENTAS_idVENTAS
   */
  public static function delete($cLIENTES_idCLIENTES, $cLIENTES_TIENDA_idTIENDA, $vENTAS_idVENTAS){
      $clientes_has_ventas = new Clientes_has_ventas();
      $clientes_has_ventas->setCLIENTES_idCLIENTES($cLIENTES_idCLIENTES); 
      $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($cLIENTES_TIENDA_idTIENDA); 
      $clientes_has_ventas->setVENTAS_idVENTAS($vENTAS_idVENTAS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientes_has_ventasDao =$FactoryDao->getclientes_has_ventasDao(self::getDataBaseDefault());
     $clientes_has_ventasDao->delete($clientes_has_ventas);
     $clientes_has_ventasDao->close();
  }

  /**
   * Lista todos los objetos Clientes_has_ventas de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Clientes_has_ventas en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientes_has_ventasDao =$FactoryDao->getclientes_has_ventasDao(self::getDataBaseDefault());
     $result = $clientes_has_ventasDao->listAll();
     $clientes_has_ventasDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Clientes_has_ventas de la base de datos a partir de CLIENTES_idCLIENTES.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cLIENTES_idCLIENTES
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCLIENTES_idCLIENTES($cLIENTES_idCLIENTES){
      $clientes_has_ventas = new Clientes_has_ventas();
      $clientes_has_ventas->setCLIENTES_idCLIENTES($cLIENTES_idCLIENTES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientes_has_ventasDao =$FactoryDao->getclientes_has_ventasDao(self::getDataBaseDefault());
     $result = $clientes_has_ventasDao->listByCLIENTES_idCLIENTES($clientes_has_ventas);
     $clientes_has_ventasDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Clientes_has_ventas de la base de datos a partir de CLIENTES_TIENDA_idTIENDA.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cLIENTES_TIENDA_idTIENDA
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCLIENTES_TIENDA_idTIENDA($cLIENTES_TIENDA_idTIENDA){
      $clientes_has_ventas = new Clientes_has_ventas();
      $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($cLIENTES_TIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientes_has_ventasDao =$FactoryDao->getclientes_has_ventasDao(self::getDataBaseDefault());
     $result = $clientes_has_ventasDao->listByCLIENTES_TIENDA_idTIENDA($clientes_has_ventas);
     $clientes_has_ventasDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Clientes_has_ventas de la base de datos a partir de VENTAS_idVENTAS.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param vENTAS_idVENTAS
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByVENTAS_idVENTAS($vENTAS_idVENTAS){
      $clientes_has_ventas = new Clientes_has_ventas();
      $clientes_has_ventas->setVENTAS_idVENTAS($vENTAS_idVENTAS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientes_has_ventasDao =$FactoryDao->getclientes_has_ventasDao(self::getDataBaseDefault());
     $result = $clientes_has_ventasDao->listByVENTAS_idVENTAS($clientes_has_ventas);
     $clientes_has_ventasDao->close();
     return $result;
  }


}
//That´s all folks!