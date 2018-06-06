<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Un generador de código no basta. Ahora debo inventar también un generador de frases tontas  \\

include_once realpath('../..').'\dao\interfaz\IProductosDao.php';
include_once realpath('../..').'\dto\Productos.php';
include_once realpath('../..').'\dto\Proveedores.php';
include_once realpath('../..').'\dto\Categoria.php';
include_once realpath('../..').'\dto\Tienda.php';

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
      $idPRODUCTOS=$productos->getIdPRODUCTOS();
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getIdPROVEEDORES();
$nOMBRE_PRODUCTO=$productos->getNOMBRE_PRODUCTO();
$uNIDAD_PRODUCTO=$productos->getUNIDAD_PRODUCTO();
$cOSTO_PRODUCTO=$productos->getCOSTO_PRODUCTO();
$cANTIDAD_PRODUCTO=$productos->getCANTIDAD_PRODUCTO();
$pRECIOVENTA_PRODUCTO=$productos->getPRECIOVENTA_PRODUCTO();
$vALORMINIMO_PRODUCTO=$productos->getVALORMINIMO_PRODUCTO();
$fECHAINGRESO_PRODUCTO=$productos->getFECHAINGRESO_PRODUCTO();
$fECHAVENCIMIENTO_PRODUCTO=$productos->getFECHAVENCIMIENTO_PRODUCTO();
$cATEGORIA_idCATEGORIA=$productos->getCATEGORIA_idCATEGORIA()->getIdCATEGORIA();
$tIENDA_idTIENDA=$productos->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "INSERT INTO `productos`( `idPRODUCTOS`, `PROVEEDORES_idPROVEEDORES`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `CANTIDAD_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `CATEGORIA_idCATEGORIA`, `TIENDA_idTIENDA`)"
          ."VALUES ('$idPRODUCTOS','$pROVEEDORES_idPROVEEDORES','$nOMBRE_PRODUCTO','$uNIDAD_PRODUCTO','$cOSTO_PRODUCTO','$cANTIDAD_PRODUCTO','$pRECIOVENTA_PRODUCTO','$vALORMINIMO_PRODUCTO','$fECHAINGRESO_PRODUCTO','$fECHAVENCIMIENTO_PRODUCTO','$cATEGORIA_idCATEGORIA','$tIENDA_idTIENDA')";
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

      try {
          $sql= "SELECT `idPRODUCTOS`, `PROVEEDORES_idPROVEEDORES`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `CANTIDAD_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `CATEGORIA_idCATEGORIA`, `TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE `idPRODUCTOS`='$idPRODUCTOS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setCANTIDAD_PRODUCTO($data[$i]['CANTIDAD_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);

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
$pROVEEDORES_idPROVEEDORES=$productos->getPROVEEDORES_idPROVEEDORES()->getIdPROVEEDORES();
$nOMBRE_PRODUCTO=$productos->getNOMBRE_PRODUCTO();
$uNIDAD_PRODUCTO=$productos->getUNIDAD_PRODUCTO();
$cOSTO_PRODUCTO=$productos->getCOSTO_PRODUCTO();
$cANTIDAD_PRODUCTO=$productos->getCANTIDAD_PRODUCTO();
$pRECIOVENTA_PRODUCTO=$productos->getPRECIOVENTA_PRODUCTO();
$vALORMINIMO_PRODUCTO=$productos->getVALORMINIMO_PRODUCTO();
$fECHAINGRESO_PRODUCTO=$productos->getFECHAINGRESO_PRODUCTO();
$fECHAVENCIMIENTO_PRODUCTO=$productos->getFECHAVENCIMIENTO_PRODUCTO();
$cATEGORIA_idCATEGORIA=$productos->getCATEGORIA_idCATEGORIA()->getIdCATEGORIA();
$tIENDA_idTIENDA=$productos->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "UPDATE `productos` SET`idPRODUCTOS`='$idPRODUCTOS' ,`PROVEEDORES_idPROVEEDORES`='$pROVEEDORES_idPROVEEDORES' ,`NOMBRE_PRODUCTO`='$nOMBRE_PRODUCTO' ,`UNIDAD_PRODUCTO`='$uNIDAD_PRODUCTO' ,`COSTO_PRODUCTO`='$cOSTO_PRODUCTO' ,`CANTIDAD_PRODUCTO`='$cANTIDAD_PRODUCTO' ,`PRECIOVENTA_PRODUCTO`='$pRECIOVENTA_PRODUCTO' ,`VALORMINIMO_PRODUCTO`='$vALORMINIMO_PRODUCTO' ,`FECHAINGRESO_PRODUCTO`='$fECHAINGRESO_PRODUCTO' ,`FECHAVENCIMIENTO_PRODUCTO`='$fECHAVENCIMIENTO_PRODUCTO' ,`CATEGORIA_idCATEGORIA`='$cATEGORIA_idCATEGORIA' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA' WHERE `idPRODUCTOS`='$idPRODUCTOS'";
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

      try {
          $sql ="DELETE FROM `productos` WHERE `idPRODUCTOS`='$idPRODUCTOS'";
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
          $sql ="SELECT `idPRODUCTOS`, `PROVEEDORES_idPROVEEDORES`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `CANTIDAD_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `CATEGORIA_idCATEGORIA`, `TIENDA_idTIENDA`"
          ."FROM `productos`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $productos= new Productos();
          $productos->setIdPRODUCTOS($data[$i]['idPRODUCTOS']);
           $proveedores = new Proveedores();
           $proveedores->setIdPROVEEDORES($data[$i]['PROVEEDORES_idPROVEEDORES']);
           $productos->setPROVEEDORES_idPROVEEDORES($proveedores);
          $productos->setNOMBRE_PRODUCTO($data[$i]['NOMBRE_PRODUCTO']);
          $productos->setUNIDAD_PRODUCTO($data[$i]['UNIDAD_PRODUCTO']);
          $productos->setCOSTO_PRODUCTO($data[$i]['COSTO_PRODUCTO']);
          $productos->setCANTIDAD_PRODUCTO($data[$i]['CANTIDAD_PRODUCTO']);
          $productos->setPRECIOVENTA_PRODUCTO($data[$i]['PRECIOVENTA_PRODUCTO']);
          $productos->setVALORMINIMO_PRODUCTO($data[$i]['VALORMINIMO_PRODUCTO']);
          $productos->setFECHAINGRESO_PRODUCTO($data[$i]['FECHAINGRESO_PRODUCTO']);
          $productos->setFECHAVENCIMIENTO_PRODUCTO($data[$i]['FECHAVENCIMIENTO_PRODUCTO']);
           $categoria = new Categoria();
           $categoria->setIdCATEGORIA($data[$i]['CATEGORIA_idCATEGORIA']);
           $productos->setCATEGORIA_idCATEGORIA($categoria);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $productos->setTIENDA_idTIENDA($tienda);

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