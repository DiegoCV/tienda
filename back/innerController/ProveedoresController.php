<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Para entender la recursividad, primero debes entender la recursividad  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Proveedores.php';
require_once realpath("../..").'\dao\interfaz\IProveedoresDao.php';

class ProveedoresController {

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
   * Crea un objeto Proveedores a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPROVEEDORES
   * @param nOMBREEMPRESA_PROVEEDORES
   * @param nOMBREEMPLEADO_PROVEEDORES
   * @param dESCUENTO_PROVEEDOR
   * @param fECHAINGRESO_PROVEEDORES
   */
  public static function insert( $idPROVEEDORES,  $nOMBREEMPRESA_PROVEEDORES,  $nOMBREEMPLEADO_PROVEEDORES,  $dESCUENTO_PROVEEDOR,  $fECHAINGRESO_PROVEEDORES){
      $proveedores = new Proveedores();
      $proveedores->setIdPROVEEDORES($idPROVEEDORES); 
      $proveedores->setNOMBREEMPRESA_PROVEEDORES($nOMBREEMPRESA_PROVEEDORES); 
      $proveedores->setNOMBREEMPLEADO_PROVEEDORES($nOMBREEMPLEADO_PROVEEDORES); 
      $proveedores->setDESCUENTO_PROVEEDOR($dESCUENTO_PROVEEDOR); 
      $proveedores->setFECHAINGRESO_PROVEEDORES($fECHAINGRESO_PROVEEDORES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $rtn = $proveedoresDao->insert($proveedores);
     $proveedoresDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Proveedores de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPROVEEDORES
   * @return El objeto en base de datos o Null
   */
  public static function select($idPROVEEDORES){
      $proveedores = new Proveedores();
      $proveedores->setIdPROVEEDORES($idPROVEEDORES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $result = $proveedoresDao->select($proveedores);
     $proveedoresDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Proveedores  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPROVEEDORES
   * @param nOMBREEMPRESA_PROVEEDORES
   * @param nOMBREEMPLEADO_PROVEEDORES
   * @param dESCUENTO_PROVEEDOR
   * @param fECHAINGRESO_PROVEEDORES
   */
  public static function update($idPROVEEDORES, $nOMBREEMPRESA_PROVEEDORES, $nOMBREEMPLEADO_PROVEEDORES, $dESCUENTO_PROVEEDOR, $fECHAINGRESO_PROVEEDORES){
      $proveedores = self::select($idPROVEEDORES);
      $proveedores->setNOMBREEMPRESA_PROVEEDORES($nOMBREEMPRESA_PROVEEDORES); 
      $proveedores->setNOMBREEMPLEADO_PROVEEDORES($nOMBREEMPLEADO_PROVEEDORES); 
      $proveedores->setDESCUENTO_PROVEEDOR($dESCUENTO_PROVEEDOR); 
      $proveedores->setFECHAINGRESO_PROVEEDORES($fECHAINGRESO_PROVEEDORES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $proveedoresDao->update($proveedores);
     $proveedoresDao->close();
  }

  /**
   * Elimina un objeto Proveedores de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPROVEEDORES
   */
  public static function delete($idPROVEEDORES){
      $proveedores = new Proveedores();
      $proveedores->setIdPROVEEDORES($idPROVEEDORES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $proveedoresDao->delete($proveedores);
     $proveedoresDao->close();
  }

  /**
   * Lista todos los objetos Proveedores de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Proveedores en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $result = $proveedoresDao->listAll();
     $proveedoresDao->close();
     return $result;
  }


}
//That´s all folks!