<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Cuando eres Ingeniero en sistemas, pero tu vocación siempre fueron los memes  \\

include_once realpath('../..').'\dao\interfaz\IProductosDao.php';
include_once realpath('../..').'\dto\Productos.php';
include_once realpath('../..').'\dto\Tienda.php';
include_once realpath('../..').'\dto\Categoria.php';
include_once realpath('../..').'\dto\Proveedores.php';
include_once realpath('../..').'\dto\Proveedores.php';

class ProductosDao implements IProductosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Productos en la base de datos.
     * @param productos objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($productos){
  //    $idPRODUCTOS=$productos->getIdPRODUCTOS();
$nOMBRE_PRODUCTO=$productos->getNOMBRE_PRODUCTO();
$uNIDAD_PRODUCTO=$productos->getUNIDAD_PRODUCTO();
$cOSTO_PRODUCTO=$productos->getCOSTO_PRODUCTO();
$pRECIOVENTA_PRODUCTO=$productos->getPRECIOVENTA_PRODUCTO();
$vALORMINIMO_PRODUCTO=$productos->getVALORMINIMO_PRODUCTO();
$fECHAINGRESO_PRODUCTO=$productos->getFECHAINGRESO_PRODUCTO();
//$cATEGORIA_PRODUCTO=$productos->getCATEGORIA_PRODUCTO();
$fECHAVENCIMIENTO_PRODUCTO=$productos->getFECHAVENCIMIENTO_PRODUCTO();
$tIENDA_idTIENDA=$productos->getTIENDA_idTIENDA();
$cATEGORIA_idCATEGORIA=$productos->getCATEGORIA_idCATEGORIA();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA();

      try {
          $sql= "INSERT INTO `productos`(
           `NOMBRE_PRODUCTO`, 
           `UNIDAD_PRODUCTO`, 
           `COSTO_PRODUCTO`, 
           `PRECIOVENTA_PRODUCTO`, 
           `VALORMINIMO_PRODUCTO`, 
           `FECHAVENCIMIENTO_PRODUCTO`, 
           `TIENDA_idTIENDA`, 
           `CATEGORIA_idCATEGORIA`, 
           `PROVEEDORES_idPROVEEDORES`, 
           `PROVEEDORES_TIENDA_idTIENDA`)"
          ."VALUES (
              '$nOMBRE_PRODUCTO',
              '$uNIDAD_PRODUCTO',
              '$cOSTO_PRODUCTO',
              '$pRECIOVENTA_PRODUCTO',
              '$vALORMINIMO_PRODUCTO',
              '$fECHAVENCIMIENTO_PRODUCTO',
              $tIENDA_idTIENDA,
              $cATEGORIA_idCATEGORIA,
              $pROVEEDORES_idPROVEEDORES,
              $pROVEEDORES_TIENDA_idTIENDA)";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($productos){
      $idPRODUCTOS=$productos->getIdPRODUCTOS();
$tIENDA_idTIENDA=$productos->getTIENDA_idTIENDA()->getIdTIENDA();
$cATEGORIA_idCATEGORIA=$productos->getCATEGORIA_idCATEGORIA()->getIdCATEGORIA();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getIdPROVEEDORES();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getTIENDA_idTIENDA();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA()->getIdPROVEEDORES();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql= "SELECT `idPRODUCTOS`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `CATEGORIA_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `TIENDA_idTIENDA`, `CATEGORIA_idCATEGORIA`, `PROVEEDORES_idPROVEEDORES`, `PROVEEDORES_TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE `idPRODUCTOS`='$idPRODUCTOS' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA' AND`CATEGORIA_idCATEGORIA`='$cATEGORIA_idCATEGORIA' AND`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' AND`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' AND`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA' AND`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
          $productos->setCATEGORIA_PRODUCTO($data[$i]['CATEGORIA_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $productos->setPROVEEDORES_TIENDA_idTIENDA($proveedores);

          }
      return $productos;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Productos en la base de datos.
     * @param productos objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($productos){
      $idPRODUCTOS=$productos->getIdPRODUCTOS();
$nOMBRE_PRODUCTO=$productos->getNOMBRE_PRODUCTO();
$uNIDAD_PRODUCTO=$productos->getUNIDAD_PRODUCTO();
$cOSTO_PRODUCTO=$productos->getCOSTO_PRODUCTO();
$pRECIOVENTA_PRODUCTO=$productos->getPRECIOVENTA_PRODUCTO();
$vALORMINIMO_PRODUCTO=$productos->getVALORMINIMO_PRODUCTO();
$fECHAINGRESO_PRODUCTO=$productos->getFECHAINGRESO_PRODUCTO();
$cATEGORIA_PRODUCTO=$productos->getCATEGORIA_PRODUCTO();
$fECHAVENCIMIENTO_PRODUCTO=$productos->getFECHAVENCIMIENTO_PRODUCTO();
$tIENDA_idTIENDA=$productos->getTIENDA_idTIENDA()->getIdTIENDA();
$cATEGORIA_idCATEGORIA=$productos->getCATEGORIA_idCATEGORIA()->getIdCATEGORIA();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getIdPROVEEDORES();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getTIENDA_idTIENDA();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA()->getIdPROVEEDORES();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql= "UPDATE `productos` SET`idPRODUCTOS`='$idPRODUCTOS' ,`NOMBRE_PRODUCTO`='$nOMBRE_PRODUCTO' ,`UNIDAD_PRODUCTO`='$uNIDAD_PRODUCTO' ,`COSTO_PRODUCTO`='$cOSTO_PRODUCTO' ,`PRECIOVENTA_PRODUCTO`='$pRECIOVENTA_PRODUCTO' ,`VALORMINIMO_PRODUCTO`='$vALORMINIMO_PRODUCTO' ,`FECHAINGRESO_PRODUCTO`='$fECHAINGRESO_PRODUCTO' ,`CATEGORIA_PRODUCTO`='$cATEGORIA_PRODUCTO' ,`FECHAVENCIMIENTO_PRODUCTO`='$fECHAVENCIMIENTO_PRODUCTO' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA' ,`CATEGORIA_idCATEGORIA`='$cATEGORIA_idCATEGORIA' ,`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' ,`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' ,`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA' ,`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA' WHERE `idPRODUCTOS`='$idPRODUCTOS' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA' ,`CATEGORIA_idCATEGORIA`='$cATEGORIA_idCATEGORIA' ,`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' ,`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' ,`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA' ,`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($productos){
      $idPRODUCTOS=$productos->getIdPRODUCTOS();
$tIENDA_idTIENDA=$productos->getTIENDA_idTIENDA()->getIdTIENDA();
$cATEGORIA_idCATEGORIA=$productos->getCATEGORIA_idCATEGORIA()->getIdCATEGORIA();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getIdPROVEEDORES();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getTIENDA_idTIENDA();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA()->getIdPROVEEDORES();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql ="DELETE FROM `productos` WHERE `idPRODUCTOS`='$idPRODUCTOS' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA' AND`CATEGORIA_idCATEGORIA`='$cATEGORIA_idCATEGORIA' AND`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' AND`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' AND`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA' AND`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Productos en la base de datos.
     * @return ArrayList<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idPRODUCTOS`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`,`FECHAVENCIMIENTO_PRODUCTO`, `TIENDA_idTIENDA`, `CATEGORIA_idCATEGORIA`, `PROVEEDORES_idPROVEEDORES`, `PROVEEDORES_TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $productos= new Productos();
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
         // $productos->setCATEGORIA_PRODUCTO($data[$i]['CATEGORIA_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $productos->setPROVEEDORES_TIENDA_idTIENDA($proveedores);

          array_push($lista,$productos);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdPRODUCTOS($productos){
      $lista = array();
      $idPRODUCTOS=$productos->getIdPRODUCTOS();

      try {
          $sql ="SELECT `idPRODUCTOS`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `CATEGORIA_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `TIENDA_idTIENDA`, `CATEGORIA_idCATEGORIA`, `PROVEEDORES_idPROVEEDORES`, `PROVEEDORES_TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE `idPRODUCTOS`='$idPRODUCTOS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
          $productos->setCATEGORIA_PRODUCTO($data[$i]['CATEGORIA_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $productos->setPROVEEDORES_TIENDA_idTIENDA($proveedores);

          array_push($lista,$productos);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($productos){
      $lista = array();
      $tIENDA_idTIENDA=$productos->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="SELECT `idPRODUCTOS`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `CATEGORIA_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `TIENDA_idTIENDA`, `CATEGORIA_idCATEGORIA`, `PROVEEDORES_idPROVEEDORES`, `PROVEEDORES_TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE `TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
          $productos->setCATEGORIA_PRODUCTO($data[$i]['CATEGORIA_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $productos->setPROVEEDORES_TIENDA_idTIENDA($proveedores);

          array_push($lista,$productos);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCATEGORIA_idCATEGORIA($productos){
      $lista = array();
      $cATEGORIA_idCATEGORIA=$productos->getCATEGORIA_idCATEGORIA()->getIdCATEGORIA();

      try {
          $sql ="SELECT `idPRODUCTOS`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `CATEGORIA_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `TIENDA_idTIENDA`, `CATEGORIA_idCATEGORIA`, `PROVEEDORES_idPROVEEDORES`, `PROVEEDORES_TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE `CATEGORIA_idCATEGORIA`='$cATEGORIA_idCATEGORIA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
          $productos->setCATEGORIA_PRODUCTO($data[$i]['CATEGORIA_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $productos->setPROVEEDORES_TIENDA_idTIENDA($proveedores);

          array_push($lista,$productos);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPROVEEDORES_idPROVEEDORES($productos){
      $lista = array();
      $pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getIdPROVEEDORES();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getTIENDA_idTIENDA();

      try {
          $sql ="SELECT `idPRODUCTOS`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `CATEGORIA_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `TIENDA_idTIENDA`, `CATEGORIA_idCATEGORIA`, `PROVEEDORES_idPROVEEDORES`, `PROVEEDORES_TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE `PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' AND`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
          $productos->setCATEGORIA_PRODUCTO($data[$i]['CATEGORIA_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $productos->setPROVEEDORES_TIENDA_idTIENDA($proveedores);

          array_push($lista,$productos);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPROVEEDORES_TIENDA_idTIENDA($productos){
      $lista = array();
      $pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA()->getIdPROVEEDORES();
$pROVEEDORES_TIENDA_idTIENDA=$productos->getPROVEEDORES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql ="SELECT `idPRODUCTOS`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `CATEGORIA_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `TIENDA_idTIENDA`, `CATEGORIA_idCATEGORIA`, `PROVEEDORES_idPROVEEDORES`, `PROVEEDORES_TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE `PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA' AND`PROVEEDORES_TIENDA_idTIENDA`='$pROVEEDORES_TIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
          $productos->setCATEGORIA_PRODUCTO($data[$i]['CATEGORIA_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($data[$i]['PROVEEDORES_TIENDA_idTIENDA']);
           $productos->setPROVEEDORES_TIENDA_idTIENDA($proveedores);

          array_push($lista,$productos);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }
}
//That´s all folks!