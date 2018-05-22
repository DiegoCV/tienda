<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El código es tuyo, modifícalo como quieras  \\

include_once realpath('../..').'\dao\interfaz\IClientesDao.php';
include_once realpath('../..').'\dto\Clientes.php';
include_once realpath('../..').'\dto\Tienda.php';

class ClientesDao implements IClientesDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Clientes en la base de datos.
     * @param clientes objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($clientes){
      $idCLIENTES=$clientes->getIdCLIENTES();
$nOMBRE_CLIENTES=$clientes->getNOMBRE_CLIENTES();
$dIRECCION_CLIENTES=$clientes->getDIRECCION_CLIENTES();
$fECHANACIMIENTO_CLIENTES=$clientes->getFECHANACIMIENTO_CLIENTES();
$eMAIL_CLIENTES=$clientes->getEMAIL_CLIENTES();
$tIENDA_idTIENDA=$clientes->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "INSERT INTO `clientes`( `idCLIENTES`, `NOMBRE_CLIENTES`, `DIRECCION_CLIENTES`, `FECHANACIMIENTO_CLIENTES`, `EMAIL_CLIENTES`, `TIENDA_idTIENDA`)"
          ."VALUES ('$idCLIENTES','$nOMBRE_CLIENTES','$dIRECCION_CLIENTES','$fECHANACIMIENTO_CLIENTES','$eMAIL_CLIENTES','$tIENDA_idTIENDA')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Clientes en la base de datos.
     * @param clientes objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($clientes){
      $idCLIENTES=$clientes->getIdCLIENTES();
$tIENDA_idTIENDA=$clientes->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "SELECT `idCLIENTES`, `NOMBRE_CLIENTES`, `DIRECCION_CLIENTES`, `FECHANACIMIENTO_CLIENTES`, `EMAIL_CLIENTES`, `TIENDA_idTIENDA`"
          ."FROM `clientes`"
          ."WHERE `idCLIENTES`='$idCLIENTES' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $clientes->setIdCLIENTES($data[$i]['idCLIENTES']);
          $clientes->setNOMBRE_CLIENTES($data[$i]['NOMBRE_CLIENTES']);
          $clientes->setDIRECCION_CLIENTES($data[$i]['DIRECCION_CLIENTES']);
          $clientes->setFECHANACIMIENTO_CLIENTES($data[$i]['FECHANACIMIENTO_CLIENTES']);
          $clientes->setEMAIL_CLIENTES($data[$i]['EMAIL_CLIENTES']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($tienda);

          }
      return $clientes;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Clientes en la base de datos.
     * @param clientes objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($clientes){
      $idCLIENTES=$clientes->getIdCLIENTES();
$nOMBRE_CLIENTES=$clientes->getNOMBRE_CLIENTES();
$dIRECCION_CLIENTES=$clientes->getDIRECCION_CLIENTES();
$fECHANACIMIENTO_CLIENTES=$clientes->getFECHANACIMIENTO_CLIENTES();
$eMAIL_CLIENTES=$clientes->getEMAIL_CLIENTES();
$tIENDA_idTIENDA=$clientes->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "UPDATE `clientes` SET`idCLIENTES`='$idCLIENTES' ,`NOMBRE_CLIENTES`='$nOMBRE_CLIENTES' ,`DIRECCION_CLIENTES`='$dIRECCION_CLIENTES' ,`FECHANACIMIENTO_CLIENTES`='$fECHANACIMIENTO_CLIENTES' ,`EMAIL_CLIENTES`='$eMAIL_CLIENTES' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA' WHERE `idCLIENTES`='$idCLIENTES' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Clientes en la base de datos.
     * @param clientes objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($clientes){
      $idCLIENTES=$clientes->getIdCLIENTES();
$tIENDA_idTIENDA=$clientes->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="DELETE FROM `clientes` WHERE `idCLIENTES`='$idCLIENTES' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Clientes en la base de datos.
     * @return ArrayList<Clientes> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idCLIENTES`, `NOMBRE_CLIENTES`, `DIRECCION_CLIENTES`, `FECHANACIMIENTO_CLIENTES`, `EMAIL_CLIENTES`, `TIENDA_idTIENDA`"
          ."FROM `clientes`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $clientes= new Clientes();
          $clientes->setIdCLIENTES($data[$i]['idCLIENTES']);
          $clientes->setNOMBRE_CLIENTES($data[$i]['NOMBRE_CLIENTES']);
          $clientes->setDIRECCION_CLIENTES($data[$i]['DIRECCION_CLIENTES']);
          $clientes->setFECHANACIMIENTO_CLIENTES($data[$i]['FECHANACIMIENTO_CLIENTES']);
          $clientes->setEMAIL_CLIENTES($data[$i]['EMAIL_CLIENTES']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($tienda);

          array_push($lista,$clientes);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Clientes en la base de datos.
     * @param clientes objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Clientes> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdCLIENTES($clientes){
      $lista = array();
      $idCLIENTES=$clientes->getIdCLIENTES();

      try {
          $sql ="SELECT `idCLIENTES`, `NOMBRE_CLIENTES`, `DIRECCION_CLIENTES`, `FECHANACIMIENTO_CLIENTES`, `EMAIL_CLIENTES`, `TIENDA_idTIENDA`"
          ."FROM `clientes`"
          ."WHERE `idCLIENTES`='$idCLIENTES'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $clientes->setIdCLIENTES($data[$i]['idCLIENTES']);
          $clientes->setNOMBRE_CLIENTES($data[$i]['NOMBRE_CLIENTES']);
          $clientes->setDIRECCION_CLIENTES($data[$i]['DIRECCION_CLIENTES']);
          $clientes->setFECHANACIMIENTO_CLIENTES($data[$i]['FECHANACIMIENTO_CLIENTES']);
          $clientes->setEMAIL_CLIENTES($data[$i]['EMAIL_CLIENTES']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($tienda);

          array_push($lista,$clientes);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Clientes en la base de datos.
     * @param clientes objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Clientes> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($clientes){
      $lista = array();
      $tIENDA_idTIENDA=$clientes->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="SELECT `idCLIENTES`, `NOMBRE_CLIENTES`, `DIRECCION_CLIENTES`, `FECHANACIMIENTO_CLIENTES`, `EMAIL_CLIENTES`, `TIENDA_idTIENDA`"
          ."FROM `clientes`"
          ."WHERE `TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $clientes->setIdCLIENTES($data[$i]['idCLIENTES']);
          $clientes->setNOMBRE_CLIENTES($data[$i]['NOMBRE_CLIENTES']);
          $clientes->setDIRECCION_CLIENTES($data[$i]['DIRECCION_CLIENTES']);
          $clientes->setFECHANACIMIENTO_CLIENTES($data[$i]['FECHANACIMIENTO_CLIENTES']);
          $clientes->setEMAIL_CLIENTES($data[$i]['EMAIL_CLIENTES']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $clientes->setTIENDA_idTIENDA($tienda);

          array_push($lista,$clientes);
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