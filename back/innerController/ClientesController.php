<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bueno ¿y ahora qué?  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Clientes.php';
require_once realpath("../..").'\dao\interfaz\IClientesDao.php';

class ClientesController {

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
   * Crea un objeto Clientes a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCLIENTES
   * @param nOMBRE_CLIENTES
   * @param dIRECCION_CLIENTES
   * @param fECHANACIMIENTO_CLIENTES
   * @param eMAIL_CLIENTES
   */
  public static function insert( $idCLIENTES,  $nOMBRE_CLIENTES,  $dIRECCION_CLIENTES,  $fECHANACIMIENTO_CLIENTES,  $eMAIL_CLIENTES){
      $clientes = new Clientes();
      $clientes->setIdCLIENTES($idCLIENTES); 
      $clientes->setNOMBRE_CLIENTES($nOMBRE_CLIENTES); 
      $clientes->setDIRECCION_CLIENTES($dIRECCION_CLIENTES); 
      $clientes->setFECHANACIMIENTO_CLIENTES($fECHANACIMIENTO_CLIENTES); 
      $clientes->setEMAIL_CLIENTES($eMAIL_CLIENTES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientesDao =$FactoryDao->getclientesDao(self::getDataBaseDefault());
     $rtn = $clientesDao->insert($clientes);
     $clientesDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Clientes de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCLIENTES
   * @return El objeto en base de datos o Null
   */
  public static function select($idCLIENTES){
      $clientes = new Clientes();
      $clientes->setIdCLIENTES($idCLIENTES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientesDao =$FactoryDao->getclientesDao(self::getDataBaseDefault());
     $result = $clientesDao->select($clientes);
     $clientesDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Clientes  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCLIENTES
   * @param nOMBRE_CLIENTES
   * @param dIRECCION_CLIENTES
   * @param fECHANACIMIENTO_CLIENTES
   * @param eMAIL_CLIENTES
   */
  public static function update($idCLIENTES, $nOMBRE_CLIENTES, $dIRECCION_CLIENTES, $fECHANACIMIENTO_CLIENTES, $eMAIL_CLIENTES){
      $clientes = self::select($idCLIENTES);
      $clientes->setNOMBRE_CLIENTES($nOMBRE_CLIENTES); 
      $clientes->setDIRECCION_CLIENTES($dIRECCION_CLIENTES); 
      $clientes->setFECHANACIMIENTO_CLIENTES($fECHANACIMIENTO_CLIENTES); 
      $clientes->setEMAIL_CLIENTES($eMAIL_CLIENTES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientesDao =$FactoryDao->getclientesDao(self::getDataBaseDefault());
     $clientesDao->update($clientes);
     $clientesDao->close();
  }

  /**
   * Elimina un objeto Clientes de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCLIENTES
   */
  public static function delete($idCLIENTES){
      $clientes = new Clientes();
      $clientes->setIdCLIENTES($idCLIENTES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientesDao =$FactoryDao->getclientesDao(self::getDataBaseDefault());
     $clientesDao->delete($clientes);
     $clientesDao->close();
  }

  /**
   * Lista todos los objetos Clientes de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Clientes en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $clientesDao =$FactoryDao->getclientesDao(self::getDataBaseDefault());
     $result = $clientesDao->listAll();
     $clientesDao->close();
     return $result;
  }


}
//That´s all folks!