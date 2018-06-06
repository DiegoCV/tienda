<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El coronel necesit� setenta y cinco a�os -los setenta y cinco a�os de su vida, minuto a minuto- para llegar a ese instante. Se sinti� puro, expl�cito, invencible, en el momento de responder:  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Vendedor.php';
require_once realpath("../..").'\dao\interfaz\IVendedorDao.php';
require_once realpath("../..").'\dto\Tienda.php';

class VendedorController {

  /**
   * Para su comodidad, defina aqu� el gestor de conexi�n predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexi�n
   */
  private static function getGestorDefault(){
      return DEFAULT_GESTOR;
  }
  /**
   * Para su comodidad, defina aqu� el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return DEFAULT_DBNAME;
  }
  /**
   * Crea un objeto Vendedor a partir de sus par�metros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los m�todos del Dao
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
   * Puede recibir NullPointerException desde los m�todos del Dao
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
   * Puede recibir NullPointerException desde los m�todos del Dao
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
   * Puede recibir NullPointerException desde los m�todos del Dao
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
   * Puede recibir NullPointerException desde los m�todos del Dao
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
//That�s all folks!