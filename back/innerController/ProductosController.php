<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Productos.php';
require_once realpath("../..").'\dao\interfaz\IProductosDao.php';
require_once realpath("../..").'\dto\Proveedores.php';
require_once realpath("../..").'\dto\Categoria.php';
require_once realpath("../..").'\dto\Tienda.php';

class ProductosController {

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
   * Crea un objeto Productos a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPRODUCTOS
   * @param pROVEEDORES_idPROVEEDORES
   * @param nOMBRE_PRODUCTO
   * @param uNIDAD_PRODUCTO
   * @param cOSTO_PRODUCTO
   * @param cANTIDAD_PRODUCTO
   * @param pRECIOVENTA_PRODUCTO
   * @param vALORMINIMO_PRODUCTO
   * @param fECHAINGRESO_PRODUCTO
   * @param fECHAVENCIMIENTO_PRODUCTO
   * @param cATEGORIA_idCATEGORIA
   * @param tIENDA_idTIENDA
   */
  public static function insert( $idPRODUCTOS,  $pROVEEDORES_idPROVEEDORES,  $nOMBRE_PRODUCTO,  $uNIDAD_PRODUCTO,  $cOSTO_PRODUCTO,  $cANTIDAD_PRODUCTO,  $pRECIOVENTA_PRODUCTO,  $vALORMINIMO_PRODUCTO,  $fECHAINGRESO_PRODUCTO,  $fECHAVENCIMIENTO_PRODUCTO,  $cATEGORIA_idCATEGORIA,  $tIENDA_idTIENDA){
      $productos = new Productos();
      $productos->setIdPRODUCTOS($idPRODUCTOS); 
      $productos->setPROVEEDORES_idPROVEEDORES($pROVEEDORES_idPROVEEDORES); 
      $productos->setNOMBRE_PRODUCTO($nOMBRE_PRODUCTO); 
      $productos->setUNIDAD_PRODUCTO($uNIDAD_PRODUCTO); 
      $productos->setCOSTO_PRODUCTO($cOSTO_PRODUCTO); 
      $productos->setCANTIDAD_PRODUCTO($cANTIDAD_PRODUCTO); 
      $productos->setPRECIOVENTA_PRODUCTO($pRECIOVENTA_PRODUCTO); 
      $productos->setVALORMINIMO_PRODUCTO($vALORMINIMO_PRODUCTO); 
      $productos->setFECHAINGRESO_PRODUCTO($fECHAINGRESO_PRODUCTO); 
      $productos->setFECHAVENCIMIENTO_PRODUCTO($fECHAVENCIMIENTO_PRODUCTO); 
      $productos->setCATEGORIA_idCATEGORIA($cATEGORIA_idCATEGORIA); 
      $productos->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $rtn = $productosDao->insert($productos);
     $productosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Productos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPRODUCTOS
   * @return El objeto en base de datos o Null
   */
  public static function select($idPRODUCTOS){
      $productos = new Productos();
      $productos->setIdPRODUCTOS($idPRODUCTOS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $result = $productosDao->select($productos);
     $productosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Productos  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPRODUCTOS
   * @param pROVEEDORES_idPROVEEDORES
   * @param nOMBRE_PRODUCTO
   * @param uNIDAD_PRODUCTO
   * @param cOSTO_PRODUCTO
   * @param cANTIDAD_PRODUCTO
   * @param pRECIOVENTA_PRODUCTO
   * @param vALORMINIMO_PRODUCTO
   * @param fECHAINGRESO_PRODUCTO
   * @param fECHAVENCIMIENTO_PRODUCTO
   * @param cATEGORIA_idCATEGORIA
   * @param tIENDA_idTIENDA
   */
  public static function update($idPRODUCTOS, $pROVEEDORES_idPROVEEDORES, $nOMBRE_PRODUCTO, $uNIDAD_PRODUCTO, $cOSTO_PRODUCTO, $cANTIDAD_PRODUCTO, $pRECIOVENTA_PRODUCTO, $vALORMINIMO_PRODUCTO, $fECHAINGRESO_PRODUCTO, $fECHAVENCIMIENTO_PRODUCTO, $cATEGORIA_idCATEGORIA, $tIENDA_idTIENDA){
      $productos = self::select($idPRODUCTOS);
      $productos->setPROVEEDORES_idPROVEEDORES($pROVEEDORES_idPROVEEDORES); 
      $productos->setNOMBRE_PRODUCTO($nOMBRE_PRODUCTO); 
      $productos->setUNIDAD_PRODUCTO($uNIDAD_PRODUCTO); 
      $productos->setCOSTO_PRODUCTO($cOSTO_PRODUCTO); 
      $productos->setCANTIDAD_PRODUCTO($cANTIDAD_PRODUCTO); 
      $productos->setPRECIOVENTA_PRODUCTO($pRECIOVENTA_PRODUCTO); 
      $productos->setVALORMINIMO_PRODUCTO($vALORMINIMO_PRODUCTO); 
      $productos->setFECHAINGRESO_PRODUCTO($fECHAINGRESO_PRODUCTO); 
      $productos->setFECHAVENCIMIENTO_PRODUCTO($fECHAVENCIMIENTO_PRODUCTO); 
      $productos->setCATEGORIA_idCATEGORIA($cATEGORIA_idCATEGORIA); 
      $productos->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $productosDao->update($productos);
     $productosDao->close();
  }

  /**
   * Elimina un objeto Productos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPRODUCTOS
   */
  public static function delete($idPRODUCTOS){
      $productos = new Productos();
      $productos->setIdPRODUCTOS($idPRODUCTOS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $productosDao->delete($productos);
     $productosDao->close();
  }

  /**
   * Lista todos los objetos Productos de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Productos en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $result = $productosDao->listAll();
     $productosDao->close();
     return $result;
  }


}
//That´s all folks!