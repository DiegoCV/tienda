<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Oh! (°o° ) ¡es Fredy Arciniegas, el intelectualoide millonario!  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Administrador.php';
require_once realpath("../..").'\dao\interfaz\IAdministradorDao.php';

class AdministradorController {

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
   * Crea un objeto Administrador a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMINISTRADOR
   * @param nOMBRE
   * @param aPELLIDO
   * @param uSUARIO
   * @param pASS
   */
  public static function insert( $idADMINISTRADOR,  $nOMBRE,  $aPELLIDO,  $uSUARIO,  $pASS){
      $administrador = new Administrador();
      $administrador->setIdADMINISTRADOR($idADMINISTRADOR); 
      $administrador->setNOMBRE($nOMBRE); 
      $administrador->setAPELLIDO($aPELLIDO); 
      $administrador->setUSUARIO($uSUARIO); 
      $administrador->setPASS($pASS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $administradorDao =$FactoryDao->getadministradorDao(self::getDataBaseDefault());
     $rtn = $administradorDao->insert($administrador);
     $administradorDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Administrador de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMINISTRADOR
   * @return El objeto en base de datos o Null
   */
  public static function select($idADMINISTRADOR){
      $administrador = new Administrador();
      $administrador->setIdADMINISTRADOR($idADMINISTRADOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $administradorDao =$FactoryDao->getadministradorDao(self::getDataBaseDefault());
     $result = $administradorDao->select($administrador);
     $administradorDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Administrador  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMINISTRADOR
   * @param nOMBRE
   * @param aPELLIDO
   * @param uSUARIO
   * @param pASS
   */
  public static function update($idADMINISTRADOR, $nOMBRE, $aPELLIDO, $uSUARIO, $pASS){
      $administrador = self::select($idADMINISTRADOR);
      $administrador->setNOMBRE($nOMBRE); 
      $administrador->setAPELLIDO($aPELLIDO); 
      $administrador->setUSUARIO($uSUARIO); 
      $administrador->setPASS($pASS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $administradorDao =$FactoryDao->getadministradorDao(self::getDataBaseDefault());
     $administradorDao->update($administrador);
     $administradorDao->close();
  }

  /**
   * Elimina un objeto Administrador de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idADMINISTRADOR
   */
  public static function delete($idADMINISTRADOR){
      $administrador = new Administrador();
      $administrador->setIdADMINISTRADOR($idADMINISTRADOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $administradorDao =$FactoryDao->getadministradorDao(self::getDataBaseDefault());
     $administradorDao->delete($administrador);
     $administradorDao->close();
  }

  /**
   * Lista todos los objetos Administrador de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Administrador en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $administradorDao =$FactoryDao->getadministradorDao(self::getDataBaseDefault());
     $result = $administradorDao->listAll();
     $administradorDao->close();
     return $result;
  }

  /**
   * Selecciona un objeto Administrador de la base de datos a partir de los atributos de inicio de sesión.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param uSUARIO
   * @param pASS
   * @return El objeto en base de datos o Null
   */
  public static function login($uSUARIO, $pASS){
      $administrador = new Administrador();
      $administrador->setUSUARIO($uSUARIO); 
      $administrador->setPASS($pASS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $administradorDao =$FactoryDao->getadministradorDao(self::getDataBaseDefault());
     $result = $administradorDao->login($administrador);
     $administradorDao->close();
     return $result;
  }


}
//That´s all folks!