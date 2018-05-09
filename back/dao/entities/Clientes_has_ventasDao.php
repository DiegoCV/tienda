<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Vine a Comala porque me dijeron que acá vivía mi padre, un tal Pedro Páramo.  \\

include_once realpath('../..').'\dao\interfaz\IClientes_has_ventasDao.php';
include_once realpath('../..').'\dto\Clientes_has_ventas.php';
include_once realpath('../..').'\dto\Clientes.php';
include_once realpath('../..').'\dto\Clientes.php';
include_once realpath('../..').'\dto\Ventas.php';

class Clientes_has_ventasDao implements IClientes_has_ventasDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($clientes_has_ventas){
      $cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getIdCLIENTES();
$cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getTIENDA_idTIENDA();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getIdCLIENTES();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getIdVENTAS();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_idVENDEDOR();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_TIENDA_idTIENDA();

      try {
          $sql= "INSERT INTO `clientes_has_ventas`( `CLIENTES_idCLIENTES`, `CLIENTES_TIENDA_idTIENDA`, `VENTAS_idVENTAS`)"
          ."VALUES ('$cLIENTES_idCLIENTES','$cLIENTES_idCLIENTES','$cLIENTES_TIENDA_idTIENDA','$cLIENTES_TIENDA_idTIENDA','$vENTAS_idVENTAS','$vENTAS_idVENTAS','$vENTAS_idVENTAS')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($clientes_has_ventas){
      $cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getIdCLIENTES();
$cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getTIENDA_idTIENDA();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getIdCLIENTES();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getIdVENTAS();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_idVENDEDOR();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_TIENDA_idTIENDA();

      try {
          $sql= "SELECT `CLIENTES_idCLIENTES`, `CLIENTES_TIENDA_idTIENDA`, `VENTAS_idVENTAS`"
          ."FROM `clientes_has_ventas`"
          ."WHERE `CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' AND`CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' AND`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' AND`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' AND`VENTAS_idVENTAS`='$vENTAS_idVENTAS' AND`VENTAS_idVENTAS`='$vENTAS_idVENTAS' AND`VENTAS_idVENTAS`='$vENTAS_idVENTAS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_idCLIENTES']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_idCLIENTES']);
           $clientes_has_ventas->setCLIENTES_idCLIENTES($clientes);
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($clientes);
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_idVENDEDOR($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($data[$i]['VENTAS_idVENTAS']);
           $clientes_has_ventas->setVENTAS_idVENTAS($ventas);

          }
      return $clientes_has_ventas;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($clientes_has_ventas){
      $cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getIdCLIENTES();
$cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getTIENDA_idTIENDA();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getIdCLIENTES();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getIdVENTAS();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_idVENDEDOR();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_TIENDA_idTIENDA();

      try {
          $sql= "UPDATE `clientes_has_ventas` SET`CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' ,`CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' ,`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' ,`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' ,`VENTAS_idVENTAS`='$vENTAS_idVENTAS' ,`VENTAS_idVENTAS`='$vENTAS_idVENTAS' ,`VENTAS_idVENTAS`='$vENTAS_idVENTAS' WHERE `CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' ,`CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' ,`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' ,`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' ,`VENTAS_idVENTAS`='$vENTAS_idVENTAS' ,`VENTAS_idVENTAS`='$vENTAS_idVENTAS' ,`VENTAS_idVENTAS`='$vENTAS_idVENTAS'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($clientes_has_ventas){
      $cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getIdCLIENTES();
$cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getTIENDA_idTIENDA();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getIdCLIENTES();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getIdVENTAS();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_idVENDEDOR();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_TIENDA_idTIENDA();

      try {
          $sql ="DELETE FROM `clientes_has_ventas` WHERE `CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' AND`CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' AND`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' AND`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' AND`VENTAS_idVENTAS`='$vENTAS_idVENTAS' AND`VENTAS_idVENTAS`='$vENTAS_idVENTAS' AND`VENTAS_idVENTAS`='$vENTAS_idVENTAS'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Clientes_has_ventas en la base de datos.
     * @return ArrayList<Clientes_has_ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `CLIENTES_idCLIENTES`, `CLIENTES_TIENDA_idTIENDA`, `VENTAS_idVENTAS`"
          ."FROM `clientes_has_ventas`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $clientes_has_ventas= new Clientes_has_ventas();
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_idCLIENTES']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_idCLIENTES']);
           $clientes_has_ventas->setCLIENTES_idCLIENTES($clientes);
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($clientes);
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_idVENDEDOR($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($data[$i]['VENTAS_idVENTAS']);
           $clientes_has_ventas->setVENTAS_idVENTAS($ventas);

          array_push($lista,$clientes_has_ventas);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Clientes_has_ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCLIENTES_idCLIENTES($clientes_has_ventas){
      $lista = array();
      $cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getIdCLIENTES();
$cLIENTES_idCLIENTES=$clientes_has_ventas->getCLIENTES_idCLIENTES()->getTIENDA_idTIENDA();

      try {
          $sql ="SELECT `CLIENTES_idCLIENTES`, `CLIENTES_TIENDA_idTIENDA`, `VENTAS_idVENTAS`"
          ."FROM `clientes_has_ventas`"
          ."WHERE `CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' AND`CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_idCLIENTES']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_idCLIENTES']);
           $clientes_has_ventas->setCLIENTES_idCLIENTES($clientes);
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($clientes);
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_idVENDEDOR($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($data[$i]['VENTAS_idVENTAS']);
           $clientes_has_ventas->setVENTAS_idVENTAS($ventas);

          array_push($lista,$clientes_has_ventas);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Clientes_has_ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCLIENTES_TIENDA_idTIENDA($clientes_has_ventas){
      $lista = array();
      $cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getIdCLIENTES();
$cLIENTES_TIENDA_idTIENDA=$clientes_has_ventas->getCLIENTES_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql ="SELECT `CLIENTES_idCLIENTES`, `CLIENTES_TIENDA_idTIENDA`, `VENTAS_idVENTAS`"
          ."FROM `clientes_has_ventas`"
          ."WHERE `CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA' AND`CLIENTES_TIENDA_idTIENDA`='$cLIENTES_TIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_idCLIENTES']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_idCLIENTES']);
           $clientes_has_ventas->setCLIENTES_idCLIENTES($clientes);
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($clientes);
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_idVENDEDOR($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($data[$i]['VENTAS_idVENTAS']);
           $clientes_has_ventas->setVENTAS_idVENTAS($ventas);

          array_push($lista,$clientes_has_ventas);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Clientes_has_ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByVENTAS_idVENTAS($clientes_has_ventas){
      $lista = array();
      $vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getIdVENTAS();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_idVENDEDOR();
$vENTAS_idVENTAS=$clientes_has_ventas->getVENTAS_idVENTAS()->getVENDEDOR_TIENDA_idTIENDA();

      try {
          $sql ="SELECT `CLIENTES_idCLIENTES`, `CLIENTES_TIENDA_idTIENDA`, `VENTAS_idVENTAS`"
          ."FROM `clientes_has_ventas`"
          ."WHERE `VENTAS_idVENTAS`='$vENTAS_idVENTAS' AND`VENTAS_idVENTAS`='$vENTAS_idVENTAS' AND`VENTAS_idVENTAS`='$vENTAS_idVENTAS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_idCLIENTES']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_idCLIENTES']);
           $clientes_has_ventas->setCLIENTES_idCLIENTES($clientes);
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($data[$i]['CLIENTES_TIENDA_idTIENDA']);
           $clientes_has_ventas->setCLIENTES_TIENDA_idTIENDA($clientes);
           $ventas = new Ventas();
           $ventas->setIdVENTAS($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_idVENDEDOR($data[$i]['VENTAS_idVENTAS']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($data[$i]['VENTAS_idVENTAS']);
           $clientes_has_ventas->setVENTAS_idVENTAS($ventas);

          array_push($lista,$clientes_has_ventas);
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