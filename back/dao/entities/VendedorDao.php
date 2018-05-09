<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    They call me Mr. Espagueti  \\

include_once realpath('../..').'\dao\interfaz\IVendedorDao.php';
include_once realpath('../..').'\dto\Vendedor.php';
include_once realpath('../..').'\dto\Tienda.php';

class VendedorDao implements IVendedorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Vendedor en la base de datos.
     * @param vendedor objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($vendedor){
      $idVENDEDOR=$vendedor->getIdVENDEDOR();
$tIENDA_idTIENDA=$vendedor->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "INSERT INTO `vendedor`( `idVENDEDOR`, `TIENDA_idTIENDA`)"
          ."VALUES ('$idVENDEDOR','$tIENDA_idTIENDA')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($vendedor){
      $idVENDEDOR=$vendedor->getIdVENDEDOR();
$tIENDA_idTIENDA=$vendedor->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "SELECT `idVENDEDOR`, `TIENDA_idTIENDA`"
          ."FROM `vendedor`"
          ."WHERE `idVENDEDOR`='$idVENDEDOR' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $vendedor->setIdVENDEDOR($data[$i]['idVENDEDOR']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($tienda);

          }
      return $vendedor;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($vendedor){
      $idVENDEDOR=$vendedor->getIdVENDEDOR();
$tIENDA_idTIENDA=$vendedor->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "UPDATE `vendedor` SET`idVENDEDOR`='$idVENDEDOR' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA' WHERE `idVENDEDOR`='$idVENDEDOR' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($vendedor){
      $idVENDEDOR=$vendedor->getIdVENDEDOR();
$tIENDA_idTIENDA=$vendedor->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="DELETE FROM `vendedor` WHERE `idVENDEDOR`='$idVENDEDOR' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Vendedor en la base de datos.
     * @return ArrayList<Vendedor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idVENDEDOR`, `TIENDA_idTIENDA`"
          ."FROM `vendedor`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $vendedor= new Vendedor();
          $vendedor->setIdVENDEDOR($data[$i]['idVENDEDOR']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($tienda);

          array_push($lista,$vendedor);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Vendedor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdVENDEDOR($vendedor){
      $lista = array();
      $idVENDEDOR=$vendedor->getIdVENDEDOR();

      try {
          $sql ="SELECT `idVENDEDOR`, `TIENDA_idTIENDA`"
          ."FROM `vendedor`"
          ."WHERE `idVENDEDOR`='$idVENDEDOR'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $vendedor->setIdVENDEDOR($data[$i]['idVENDEDOR']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($tienda);

          array_push($lista,$vendedor);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Vendedor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($vendedor){
      $lista = array();
      $tIENDA_idTIENDA=$vendedor->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="SELECT `idVENDEDOR`, `TIENDA_idTIENDA`"
          ."FROM `vendedor`"
          ."WHERE `TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $vendedor->setIdVENDEDOR($data[$i]['idVENDEDOR']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($tienda);

          array_push($lista,$vendedor);
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