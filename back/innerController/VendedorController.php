<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El coronel necesitó setenta y cinco años -los setenta y cinco años de su vida, minuto a minuto- para llegar a ese instante. Se sintió puro, explícito, invencible, en el momento de responder:  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Vendedor.php';
require_once realpath("../..").'\dao\interfaz\IVendedorDao.php';
require_once realpath("../..").'\dto\Tienda.php';

class VendedorController {

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
   * Crea un objeto Vendedor a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENDEDOR
   * @param nOMBRE_VENDEDOR
   * @param uSUARIO_VENDEDOR
   * @param pASS_VENDEDOR
   * @param tIENDA_idTIENDA
   */
  public static function insert( $idVENDEDOR,  $nOMBRE_VENDEDOR,  $uSUARIO_VENDEDOR,  $pASS_VENDEDOR,  $tIENDA_idTIENDA){
      $vendedor = new Vendedor();
      $vendedor->setIdVENDEDOR($idVENDEDOR); 
      $vendedor->setNOMBRE_VENDEDOR($nOMBRE_VENDEDOR); 
      $vendedor->setUSUARIO_VENDEDOR($uSUARIO_VENDEDOR); 
      $vendedor->setPASS_VENDEDOR($pASS_VENDEDOR); 
      $vendedor->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $vendedorDao =$FactoryDao->getvendedorDao(self::getDataBaseDefault());
     $rtn = $vendedorDao->insert($vendedor);
     $vendedorDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Vendedor de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENDEDOR
   * @return El objeto en base de datos o Null
   */
  public static function select($idVENDEDOR){
      $vendedor = new Vendedor();
      $vendedor->setIdVENDEDOR($idVENDEDOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $vendedorDao =$FactoryDao->getvendedorDao(self::getDataBaseDefault());
     $result = $vendedorDao->select($vendedor);
     $vendedorDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Vendedor  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENDEDOR
   * @param nOMBRE_VENDEDOR
   * @param uSUARIO_VENDEDOR
   * @param pASS_VENDEDOR
   * @param tIENDA_idTIENDA
   */
  public static function update($idVENDEDOR, $nOMBRE_VENDEDOR, $uSUARIO_VENDEDOR, $pASS_VENDEDOR, $tIENDA_idTIENDA){
      $vendedor = self::select($idVENDEDOR);
      $vendedor->setNOMBRE_VENDEDOR($nOMBRE_VENDEDOR); 
      $vendedor->setUSUARIO_VENDEDOR($uSUARIO_VENDEDOR); 
      $vendedor->setPASS_VENDEDOR($pASS_VENDEDOR); 
      $vendedor->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $vendedorDao =$FactoryDao->getvendedorDao(self::getDataBaseDefault());
     $vendedorDao->update($vendedor);
     $vendedorDao->close();
  }

  /**
   * Elimina un objeto Vendedor de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idVENDEDOR
   */
  public static function delete($idVENDEDOR){
      $vendedor = new Vendedor();
      $vendedor->setIdVENDEDOR($idVENDEDOR); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $vendedorDao =$FactoryDao->getvendedorDao(self::getDataBaseDefault());
     $vendedorDao->delete($vendedor);
     $vendedorDao->close();
  }

  /**
   * Lista todos los objetos Vendedor de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Vendedor en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $vendedorDao =$FactoryDao->getvendedorDao(self::getDataBaseDefault());
     $result = $vendedorDao->listAll();
     $vendedorDao->close();
     return $result;
  }


}
//That´s all folks!