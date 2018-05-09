<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) *Nostalgia  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Proveedores.php';
require_once realpath("../..").'\dao\interfaz\IProveedoresDao.php';
require_once realpath("../..").'\dto\Tienda.php';

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
   * @param tIENDA_idTIENDA
   */
  public static function insert( $idPROVEEDORES,  $nOMBREEMPRESA_PROVEEDORES,  $nOMBREEMPLEADO_PROVEEDORES,  $dESCUENTO_PROVEEDOR,  $fECHAINGRESO_PROVEEDORES,  $tIENDA_idTIENDA){
      $proveedores = new Proveedores();
      $proveedores->setIdPROVEEDORES($idPROVEEDORES); 
      $proveedores->setNOMBREEMPRESA_PROVEEDORES($nOMBREEMPRESA_PROVEEDORES); 
      $proveedores->setNOMBREEMPLEADO_PROVEEDORES($nOMBREEMPLEADO_PROVEEDORES); 
      $proveedores->setDESCUENTO_PROVEEDOR($dESCUENTO_PROVEEDOR); 
      $proveedores->setFECHAINGRESO_PROVEEDORES($fECHAINGRESO_PROVEEDORES); 
      $proveedores->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

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
   * @param tIENDA_idTIENDA
   * @return El objeto en base de datos o Null
   */
  public static function select($idPROVEEDORES, $tIENDA_idTIENDA){
      $proveedores = new Proveedores();
      $proveedores->setIdPROVEEDORES($idPROVEEDORES); 
      $proveedores->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

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
   * @param tIENDA_idTIENDA
   */
  public static function update($idPROVEEDORES, $nOMBREEMPRESA_PROVEEDORES, $nOMBREEMPLEADO_PROVEEDORES, $dESCUENTO_PROVEEDOR, $fECHAINGRESO_PROVEEDORES, $tIENDA_idTIENDA){
      $proveedores = self::select($idPROVEEDORES, $tIENDA_idTIENDA);
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
   * @param tIENDA_idTIENDA
   */
  public static function delete($idPROVEEDORES, $tIENDA_idTIENDA){
      $proveedores = new Proveedores();
      $proveedores->setIdPROVEEDORES($idPROVEEDORES); 
      $proveedores->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

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

  /**
   * Lista todos los objetos Proveedores de la base de datos a partir de idPROVEEDORES.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPROVEEDORES
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByIdPROVEEDORES($idPROVEEDORES){
      $proveedores = new Proveedores();
      $proveedores->setIdPROVEEDORES($idPROVEEDORES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $result = $proveedoresDao->listByIdPROVEEDORES($proveedores);
     $proveedoresDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Proveedores de la base de datos a partir de TIENDA_idTIENDA.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tIENDA_idTIENDA
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByTIENDA_idTIENDA($tIENDA_idTIENDA){
      $proveedores = new Proveedores();
      $proveedores->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $proveedoresDao =$FactoryDao->getproveedoresDao(self::getDataBaseDefault());
     $result = $proveedoresDao->listByTIENDA_idTIENDA($proveedores);
     $proveedoresDao->close();
     return $result;
  }


}
//That´s all folks!