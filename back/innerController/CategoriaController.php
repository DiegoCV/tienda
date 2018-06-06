<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\

require_once realpath("../..").'\innerController\GlobalController.php';
require_once realpath("../..").'\dao\interfaz\IFactoryDao.php';
require_once realpath("../..").'\dto\Categoria.php';
require_once realpath("../..").'\dao\interfaz\ICategoriaDao.php';

class CategoriaController {

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
   * Crea un objeto Categoria a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCATEGORIA
   * @param nOMBRE_CATEGORIA
   */
  public static function insert( $idCATEGORIA,  $nOMBRE_CATEGORIA){
      $categoria = new Categoria();
      $categoria->setIdCATEGORIA($idCATEGORIA); 
      $categoria->setNOMBRE_CATEGORIA($nOMBRE_CATEGORIA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $rtn = $categoriaDao->insert($categoria);
     $categoriaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Categoria de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCATEGORIA
   * @return El objeto en base de datos o Null
   */
  public static function select($idCATEGORIA){
      $categoria = new Categoria();
      $categoria->setIdCATEGORIA($idCATEGORIA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $result = $categoriaDao->select($categoria);
     $categoriaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Categoria  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCATEGORIA
   * @param nOMBRE_CATEGORIA
   */
  public static function update($idCATEGORIA, $nOMBRE_CATEGORIA){
      $categoria = self::select($idCATEGORIA);
      $categoria->setNOMBRE_CATEGORIA($nOMBRE_CATEGORIA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $categoriaDao->update($categoria);
     $categoriaDao->close();
  }

  /**
   * Elimina un objeto Categoria de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idCATEGORIA
   */
  public static function delete($idCATEGORIA){
      $categoria = new Categoria();
      $categoria->setIdCATEGORIA($idCATEGORIA); 

     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $categoriaDao->delete($categoria);
     $categoriaDao->close();
  }

  /**
   * Lista todos los objetos Categoria de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Categoria en base de datos o Null
   */
  public static function listAll(){
     $FactoryDao=new FactoryDao(self::getGestorDefault());
     $categoriaDao =$FactoryDao->getcategoriaDao(self::getDataBaseDefault());
     $result = $categoriaDao->listAll();
     $categoriaDao->close();
     return $result;
  }


}
//That´s all folks!