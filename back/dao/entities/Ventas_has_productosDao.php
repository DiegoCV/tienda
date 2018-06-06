<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Mátalos a todos, y que dios elija  \\

include_once realpath('../..').'\dao\interfaz\IVentas_has_productosDao.php';
include_once realpath('../..').'\dto\Ventas_has_productos.php';
include_once realpath('../..').'\dto\Ventas.php';
include_once realpath('../..').'\dto\Productos.php';

class Ventas_has_productosDao implements IVentas_has_productosDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($ventas_has_productos){
      $vENTAS_idVENTAS=$ventas_has_productos->getVENTAS_idVENTAS()->getIdVENTAS();
$pRODUCTOS_idPRODUCTOS=$ventas_has_productos->getPRODUCTOS_idPRODUCTOS()->getIdPRODUCTOS();

      try {
          $sql= "INSERT INTO `ventas_has_productos`( `VENTAS_idVENTAS`, `PRODUCTOS_idPRODUCTOS`)"
          ."VALUES ('$vENTAS_idVENTAS','$pRODUCTOS_idPRODUCTOS')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($ventas_has_productos){
      $vENTAS_idVENTAS=$ventas_has_productos->getVENTAS_idVENTAS()->getIdVENTAS();
$pRODUCTOS_idPRODUCTOS=$ventas_has_productos->getPRODUCTOS_idPRODUCTOS()->getIdPRODUCTOS();

      try {
          $sql= "SELECT `VENTAS_idVENTAS`, `PRODUCTOS_idPRODUCTOS`"
          ."FROM `ventas_has_productos`"
          ."WHERE `VENTAS_idVENTAS`='$vENTAS_idVENTAS' AND`PRODUCTOS_idPRODUCTOS`='$pRODUCTOS_idPRODUCTOS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas_has_productos->setVENTAS_idVENTAS($ventas);
           $productos = new Productos();
           $productos->setIdPRODUCTOS($data[$i]['PRODUCTOS_idPRODUCTOS']);
           $ventas_has_productos->setPRODUCTOS_idPRODUCTOS($productos);

          }
      return $ventas_has_productos;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($ventas_has_productos){
      $vENTAS_idVENTAS=$ventas_has_productos->getVENTAS_idVENTAS()->getIdVENTAS();
$pRODUCTOS_idPRODUCTOS=$ventas_has_productos->getPRODUCTOS_idPRODUCTOS()->getIdPRODUCTOS();

      try {
          $sql= "UPDATE `ventas_has_productos` SET`VENTAS_idVENTAS`='$vENTAS_idVENTAS' ,`PRODUCTOS_idPRODUCTOS`='$pRODUCTOS_idPRODUCTOS' WHERE `VENTAS_idVENTAS`='$vENTAS_idVENTAS' ,`PRODUCTOS_idPRODUCTOS`='$pRODUCTOS_idPRODUCTOS'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($ventas_has_productos){
      $vENTAS_idVENTAS=$ventas_has_productos->getVENTAS_idVENTAS()->getIdVENTAS();
$pRODUCTOS_idPRODUCTOS=$ventas_has_productos->getPRODUCTOS_idPRODUCTOS()->getIdPRODUCTOS();

      try {
          $sql ="DELETE FROM `ventas_has_productos` WHERE `VENTAS_idVENTAS`='$vENTAS_idVENTAS' AND`PRODUCTOS_idPRODUCTOS`='$pRODUCTOS_idPRODUCTOS'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Ventas_has_productos en la base de datos.
     * @return ArrayList<Ventas_has_productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `VENTAS_idVENTAS`, `PRODUCTOS_idPRODUCTOS`"
          ."FROM `ventas_has_productos`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $ventas_has_productos= new Ventas_has_productos();
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas_has_productos->setVENTAS_idVENTAS($ventas);
           $productos = new Productos();
           $productos->setIdPRODUCTOS($data[$i]['PRODUCTOS_idPRODUCTOS']);
           $ventas_has_productos->setPRODUCTOS_idPRODUCTOS($productos);

          array_push($lista,$ventas_has_productos);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Ventas_has_productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByVENTAS_idVENTAS($ventas_has_productos){
      $lista = array();
      $vENTAS_idVENTAS=$ventas_has_productos->getVENTAS_idVENTAS()->getIdVENTAS();

      try {
          $sql ="SELECT `VENTAS_idVENTAS`, `PRODUCTOS_idPRODUCTOS`"
          ."FROM `ventas_has_productos`"
          ."WHERE `VENTAS_idVENTAS`='$vENTAS_idVENTAS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas_has_productos->setVENTAS_idVENTAS($ventas);
           $productos = new Productos();
           $productos->setIdPRODUCTOS($data[$i]['PRODUCTOS_idPRODUCTOS']);
           $ventas_has_productos->setPRODUCTOS_idPRODUCTOS($productos);

          array_push($lista,$ventas_has_productos);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Ventas_has_productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPRODUCTOS_idPRODUCTOS($ventas_has_productos){
      $lista = array();
      $pRODUCTOS_idPRODUCTOS=$ventas_has_productos->getPRODUCTOS_idPRODUCTOS()->getIdPRODUCTOS();

      try {
          $sql ="SELECT `VENTAS_idVENTAS`, `PRODUCTOS_idPRODUCTOS`"
          ."FROM `ventas_has_productos`"
          ."WHERE `PRODUCTOS_idPRODUCTOS`='$pRODUCTOS_idPRODUCTOS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas_has_productos->setVENTAS_idVENTAS($ventas);
           $productos = new Productos();
           $productos->setIdPRODUCTOS($data[$i]['PRODUCTOS_idPRODUCTOS']);
           $ventas_has_productos->setPRODUCTOS_idPRODUCTOS($productos);

          array_push($lista,$ventas_has_productos);
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