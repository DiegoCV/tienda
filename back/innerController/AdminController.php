<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Admin.php';
require_once realpath("../..").'\dao\interfaz\IAdminDao.php';
require_once realpath("../..").'\dto\Tienda.php';

class AdminController {

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
   * Crea un objeto Admin a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMIN
   * @param nOMBRE
   * @param aPELLIDO
   * @param pASS_ADMIN
   * @param dIRECCION
   * @param fECHANACIMIENTO
   * @param fECHAINGRESO
   * @param tIENDA_idTIENDA
   */
  public static function insert( $idADMIN,  $nOMBRE,  $aPELLIDO,  $pASS_ADMIN,  $dIRECCION,  $fECHANACIMIENTO,  $fECHAINGRESO,  $tIENDA_idTIENDA){
      $admin = new Admin();
      $admin->setIdADMIN($idADMIN); 
      $admin->setNOMBRE($nOMBRE); 
      $admin->setAPELLIDO($aPELLIDO); 
      $admin->setPASS_ADMIN($pASS_ADMIN); 
      $admin->setDIRECCION($dIRECCION); 
      $admin->setFECHANACIMIENTO($fECHANACIMIENTO); 
      $admin->setFECHAINGRESO($fECHAINGRESO); 
      $admin->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $adminDao =$FactoryDao->getadminDao(self::getDataBaseDefault());
     $rtn = $adminDao->insert($admin);
     $adminDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Admin de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMIN
   * @param tIENDA_idTIENDA
   * @return El objeto en base de datos o Null
   */
  public static function select($idADMIN, $tIENDA_idTIENDA){
      $admin = new Admin();
      $admin->setIdADMIN($idADMIN); 
      $admin->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $adminDao =$FactoryDao->getadminDao(self::getDataBaseDefault());
     $result = $adminDao->select($admin);
     $adminDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Admin  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMIN
   * @param nOMBRE
   * @param aPELLIDO
   * @param pASS_ADMIN
   * @param dIRECCION
   * @param fECHANACIMIENTO
   * @param fECHAINGRESO
   * @param tIENDA_idTIENDA
   */
  public static function update($idADMIN, $nOMBRE, $aPELLIDO, $pASS_ADMIN, $dIRECCION, $fECHANACIMIENTO, $fECHAINGRESO, $tIENDA_idTIENDA){
      $admin = self::select($idADMIN, $tIENDA_idTIENDA);
      $admin->setNOMBRE($nOMBRE); 
      $admin->setAPELLIDO($aPELLIDO); 
      $admin->setPASS_ADMIN($pASS_ADMIN); 
      $admin->setDIRECCION($dIRECCION); 
      $admin->setFECHANACIMIENTO($fECHANACIMIENTO); 
      $admin->setFECHAINGRESO($fECHAINGRESO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $adminDao =$FactoryDao->getadminDao(self::getDataBaseDefault());
     $adminDao->update($admin);
     $adminDao->close();
  }

  /**
   * Elimina un objeto Admin de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMIN
   * @param tIENDA_idTIENDA
   */
  public static function delete($idADMIN, $tIENDA_idTIENDA){
      $admin = new Admin();
      $admin->setIdADMIN($idADMIN); 
      $admin->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $adminDao =$FactoryDao->getadminDao(self::getDataBaseDefault());
     $adminDao->delete($admin);
     $adminDao->close();
  }

  /**
   * Lista todos los objetos Admin de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Admin en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $adminDao =$FactoryDao->getadminDao(self::getDataBaseDefault());
     $result = $adminDao->listAll();
     $adminDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Admin de la base de datos a partir de idADMIN.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMIN
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByIdADMIN($idADMIN){
      $admin = new Admin();
      $admin->setIdADMIN($idADMIN); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $adminDao =$FactoryDao->getadminDao(self::getDataBaseDefault());
     $result = $adminDao->listByIdADMIN($admin);
     $adminDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Admin de la base de datos a partir de TIENDA_idTIENDA.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tIENDA_idTIENDA
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByTIENDA_idTIENDA($tIENDA_idTIENDA){
      $admin = new Admin();
      $admin->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $adminDao =$FactoryDao->getadminDao(self::getDataBaseDefault());
     $result = $adminDao->listByTIENDA_idTIENDA($admin);
     $adminDao->close();
     return $result;
  }

  /**
   * Selecciona un objeto Admin de la base de datos a partir de los atributos de inicio de sesión.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMIN
   * @param pASS_ADMIN
   * @return El objeto en base de datos o Null
   */
  public static function login($idADMIN, $pASS_ADMIN){
      $admin = new Admin();
      $admin->setIdADMIN($idADMIN); 
      $admin->setPASS_ADMIN($pASS_ADMIN); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $adminDao =$FactoryDao->getadminDao(self::getDataBaseDefault());
     $result = $adminDao->login($admin);
     $adminDao->close();
     return $result;
  }


}
//That´s all folks!