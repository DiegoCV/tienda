<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Antes que me hubiera apasionado por mujer alguna, jugué mi corazón al azar y me lo ganó la Violencia.  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Tienda.php';
require_once realpath("../..").'\dao\interfaz\ITiendaDao.php';

class TiendaController {

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
   * Crea un objeto Tienda a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTIENDA
   * @param nOMBRE_TIENDA
   * @param dIERECCION_TIENDA
   * @param nIT_TIENDA
   * @param rEPRESENTATE_TIENDA
   */
  public static function insert( $idTIENDA,  $nOMBRE_TIENDA,  $dIERECCION_TIENDA,  $nIT_TIENDA,  $rEPRESENTATE_TIENDA){
      $tienda = new Tienda();
      $tienda->setIdTIENDA($idTIENDA); 
      $tienda->setNOMBRE_TIENDA($nOMBRE_TIENDA); 
      $tienda->setDIERECCION_TIENDA($dIERECCION_TIENDA); 
      $tienda->setNIT_TIENDA($nIT_TIENDA); 
      $tienda->setREPRESENTATE_TIENDA($rEPRESENTATE_TIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tiendaDao =$FactoryDao->gettiendaDao(self::getDataBaseDefault());
     $rtn = $tiendaDao->insert($tienda);
     $tiendaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTIENDA
   * @return El objeto en base de datos o Null
   */
  public static function select($idTIENDA){
      $tienda = new Tienda();
      $tienda->setIdTIENDA($idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tiendaDao =$FactoryDao->gettiendaDao(self::getDataBaseDefault());
     $result = $tiendaDao->select($tienda);
     $tiendaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tienda  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTIENDA
   * @param nOMBRE_TIENDA
   * @param dIERECCION_TIENDA
   * @param nIT_TIENDA
   * @param rEPRESENTATE_TIENDA
   */
  public static function update($idTIENDA, $nOMBRE_TIENDA, $dIERECCION_TIENDA, $nIT_TIENDA, $rEPRESENTATE_TIENDA){
      $tienda = self::select($idTIENDA);
      $tienda->setNOMBRE_TIENDA($nOMBRE_TIENDA); 
      $tienda->setDIERECCION_TIENDA($dIERECCION_TIENDA); 
      $tienda->setNIT_TIENDA($nIT_TIENDA); 
      $tienda->setREPRESENTATE_TIENDA($rEPRESENTATE_TIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tiendaDao =$FactoryDao->gettiendaDao(self::getDataBaseDefault());
     $tiendaDao->update($tienda);
     $tiendaDao->close();
  }

  /**
   * Elimina un objeto Tienda de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTIENDA
   */
  public static function delete($idTIENDA){
      $tienda = new Tienda();
      $tienda->setIdTIENDA($idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tiendaDao =$FactoryDao->gettiendaDao(self::getDataBaseDefault());
     $tiendaDao->delete($tienda);
     $tiendaDao->close();
  }

  /**
   * Lista todos los objetos Tienda de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tienda en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $tiendaDao =$FactoryDao->gettiendaDao(self::getDataBaseDefault());
     $result = $tiendaDao->listAll();
     $tiendaDao->close();
     return $result;
  }


}
//That´s all folks!