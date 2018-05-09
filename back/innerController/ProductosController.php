<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Productos.php';
require_once realpath("../..").'\dao\interfaz\IProductosDao.php';
require_once realpath("../..").'\dto\Tienda.php';
require_once realpath("../..").'\dto\Categoria.php';
require_once realpath("../..").'\dto\Proveedores.php';
require_once realpath("../..").'\dto\Proveedores.php';

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
   * @param nOMBRE_PRODUCTO
   * @param uNIDAD_PRODUCTO
   * @param cOSTO_PRODUCTO
   * @param pRECIOVENTA_PRODUCTO
   * @param vALORMINIMO_PRODUCTO
   * @param fECHAINGRESO_PRODUCTO
   * @param cATEGORIA_PRODUCTO
   * @param fECHAVENCIMIENTO_PRODUCTO
   * @param tIENDA_idTIENDA
   * @param cATEGORIA_idCATEGORIA
   * @param pROVEEDORES_idPROVEEDORES
   * @param pROVEEDORES_TIENDA_idTIENDA
   */
  public static function insert( $idPRODUCTOS,  $nOMBRE_PRODUCTO,  $uNIDAD_PRODUCTO,  $cOSTO_PRODUCTO,  $pRECIOVENTA_PRODUCTO,  $vALORMINIMO_PRODUCTO,  $fECHAINGRESO_PRODUCTO,  $cATEGORIA_PRODUCTO,  $fECHAVENCIMIENTO_PRODUCTO,  $tIENDA_idTIENDA,  $cATEGORIA_idCATEGORIA,  $pROVEEDORES_idPROVEEDORES,  $pROVEEDORES_TIENDA_idTIENDA){
      $productos = new Productos();
      $productos->setIdPRODUCTOS($idPRODUCTOS); 
      $productos->setNOMBRE_PRODUCTO($nOMBRE_PRODUCTO); 
      $productos->setUNIDAD_PRODUCTO($uNIDAD_PRODUCTO); 
      $productos->setCOSTO_PRODUCTO($cOSTO_PRODUCTO); 
      $productos->setPRECIOVENTA_PRODUCTO($pRECIOVENTA_PRODUCTO); 
      $productos->setVALORMINIMO_PRODUCTO($vALORMINIMO_PRODUCTO); 
      $productos->setFECHAINGRESO_PRODUCTO($fECHAINGRESO_PRODUCTO); 
      $productos->setCATEGORIA_PRODUCTO($cATEGORIA_PRODUCTO); 
      $productos->setFECHAVENCIMIENTO_PRODUCTO($fECHAVENCIMIENTO_PRODUCTO); 
      $productos->setTIENDA_idTIENDA($tIENDA_idTIENDA); 
      $productos->setCATEGORIA_idCATEGORIA($cATEGORIA_idCATEGORIA); 
      $productos->setPROVEEDORES_idPROVEEDORES($pROVEEDORES_idPROVEEDORES); 
      $productos->setPROVEEDORES_TIENDA_idTIENDA($pROVEEDORES_TIENDA_idTIENDA); 

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
   * @param tIENDA_idTIENDA
   * @param cATEGORIA_idCATEGORIA
   * @param pROVEEDORES_idPROVEEDORES
   * @param pROVEEDORES_TIENDA_idTIENDA
   * @return El objeto en base de datos o Null
   */
  public static function select($idPRODUCTOS, $tIENDA_idTIENDA, $cATEGORIA_idCATEGORIA, $pROVEEDORES_idPROVEEDORES, $pROVEEDORES_TIENDA_idTIENDA){
      $productos = new Productos();
      $productos->setIdPRODUCTOS($idPRODUCTOS); 
      $productos->setTIENDA_idTIENDA($tIENDA_idTIENDA); 
      $productos->setCATEGORIA_idCATEGORIA($cATEGORIA_idCATEGORIA); 
      $productos->setPROVEEDORES_idPROVEEDORES($pROVEEDORES_idPROVEEDORES); 
      $productos->setPROVEEDORES_TIENDA_idTIENDA($pROVEEDORES_TIENDA_idTIENDA); 

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
   * @param nOMBRE_PRODUCTO
   * @param uNIDAD_PRODUCTO
   * @param cOSTO_PRODUCTO
   * @param pRECIOVENTA_PRODUCTO
   * @param vALORMINIMO_PRODUCTO
   * @param fECHAINGRESO_PRODUCTO
   * @param cATEGORIA_PRODUCTO
   * @param fECHAVENCIMIENTO_PRODUCTO
   * @param tIENDA_idTIENDA
   * @param cATEGORIA_idCATEGORIA
   * @param pROVEEDORES_idPROVEEDORES
   * @param pROVEEDORES_TIENDA_idTIENDA
   */
  public static function update($idPRODUCTOS, $nOMBRE_PRODUCTO, $uNIDAD_PRODUCTO, $cOSTO_PRODUCTO, $pRECIOVENTA_PRODUCTO, $vALORMINIMO_PRODUCTO, $fECHAINGRESO_PRODUCTO, $cATEGORIA_PRODUCTO, $fECHAVENCIMIENTO_PRODUCTO, $tIENDA_idTIENDA, $cATEGORIA_idCATEGORIA, $pROVEEDORES_idPROVEEDORES, $pROVEEDORES_TIENDA_idTIENDA){
      $productos = self::select($idPRODUCTOS, $tIENDA_idTIENDA, $cATEGORIA_idCATEGORIA, $pROVEEDORES_idPROVEEDORES, $pROVEEDORES_TIENDA_idTIENDA);
      $productos->setNOMBRE_PRODUCTO($nOMBRE_PRODUCTO); 
      $productos->setUNIDAD_PRODUCTO($uNIDAD_PRODUCTO); 
      $productos->setCOSTO_PRODUCTO($cOSTO_PRODUCTO); 
      $productos->setPRECIOVENTA_PRODUCTO($pRECIOVENTA_PRODUCTO); 
      $productos->setVALORMINIMO_PRODUCTO($vALORMINIMO_PRODUCTO); 
      $productos->setFECHAINGRESO_PRODUCTO($fECHAINGRESO_PRODUCTO); 
      $productos->setCATEGORIA_PRODUCTO($cATEGORIA_PRODUCTO); 
      $productos->setFECHAVENCIMIENTO_PRODUCTO($fECHAVENCIMIENTO_PRODUCTO); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $productosDao->update($productos);
     $productosDao->close();
  }

  /**
   * Elimina un objeto Productos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPRODUCTOS
   * @param tIENDA_idTIENDA
   * @param cATEGORIA_idCATEGORIA
   * @param pROVEEDORES_idPROVEEDORES
   * @param pROVEEDORES_TIENDA_idTIENDA
   */
  public static function delete($idPRODUCTOS, $tIENDA_idTIENDA, $cATEGORIA_idCATEGORIA, $pROVEEDORES_idPROVEEDORES, $pROVEEDORES_TIENDA_idTIENDA){
      $productos = new Productos();
      $productos->setIdPRODUCTOS($idPRODUCTOS); 
      $productos->setTIENDA_idTIENDA($tIENDA_idTIENDA); 
      $productos->setCATEGORIA_idCATEGORIA($cATEGORIA_idCATEGORIA); 
      $productos->setPROVEEDORES_idPROVEEDORES($pROVEEDORES_idPROVEEDORES); 
      $productos->setPROVEEDORES_TIENDA_idTIENDA($pROVEEDORES_TIENDA_idTIENDA); 

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

  /**
   * Lista todos los objetos Productos de la base de datos a partir de idPRODUCTOS.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idPRODUCTOS
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByIdPRODUCTOS($idPRODUCTOS){
      $productos = new Productos();
      $productos->setIdPRODUCTOS($idPRODUCTOS); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $result = $productosDao->listByIdPRODUCTOS($productos);
     $productosDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Productos de la base de datos a partir de TIENDA_idTIENDA.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param tIENDA_idTIENDA
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByTIENDA_idTIENDA($tIENDA_idTIENDA){
      $productos = new Productos();
      $productos->setTIENDA_idTIENDA($tIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $result = $productosDao->listByTIENDA_idTIENDA($productos);
     $productosDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Productos de la base de datos a partir de CATEGORIA_idCATEGORIA.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param cATEGORIA_idCATEGORIA
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByCATEGORIA_idCATEGORIA($cATEGORIA_idCATEGORIA){
      $productos = new Productos();
      $productos->setCATEGORIA_idCATEGORIA($cATEGORIA_idCATEGORIA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $result = $productosDao->listByCATEGORIA_idCATEGORIA($productos);
     $productosDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Productos de la base de datos a partir de PROVEEDORES_idPROVEEDORES.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param pROVEEDORES_idPROVEEDORES
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByPROVEEDORES_idPROVEEDORES($pROVEEDORES_idPROVEEDORES){
      $productos = new Productos();
      $productos->setPROVEEDORES_idPROVEEDORES($pROVEEDORES_idPROVEEDORES); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $result = $productosDao->listByPROVEEDORES_idPROVEEDORES($productos);
     $productosDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Productos de la base de datos a partir de PROVEEDORES_TIENDA_idTIENDA.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param pROVEEDORES_TIENDA_idTIENDA
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByPROVEEDORES_TIENDA_idTIENDA($pROVEEDORES_TIENDA_idTIENDA){
      $productos = new Productos();
      $productos->setPROVEEDORES_TIENDA_idTIENDA($pROVEEDORES_TIENDA_idTIENDA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $productosDao =$FactoryDao->getproductosDao(self::getDataBaseDefault());
     $result = $productosDao->listByPROVEEDORES_TIENDA_idTIENDA($productos);
     $productosDao->close();
     return $result;
  }


}
//That´s all folks!