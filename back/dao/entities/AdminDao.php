<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¡Muerte a todos los humanos!  \\

include_once realpath('../..').'\dao\interfaz\IAdminDao.php';
include_once realpath('../..').'\dto\Admin.php';
include_once realpath('../..').'\dto\Tienda.php';

class AdminDao implements IAdminDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Admin en la base de datos.
     * @param admin objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($admin){
      $idADMIN=$admin->getIdADMIN();
$nOMBRE=$admin->getNOMBRE();
$aPELLIDO=$admin->getAPELLIDO();
$pASS_ADMIN=$admin->getPASS_ADMIN();
$dIRECCION=$admin->getDIRECCION();
$fECHANACIMIENTO=$admin->getFECHANACIMIENTO();
$fECHAINGRESO=$admin->getFECHAINGRESO();
$tIENDA_idTIENDA=$admin->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "INSERT INTO `admin`( `idADMIN`, `NOMBRE`, `APELLIDO`, `PASS_ADMIN`, `DIRECCION`, `FECHANACIMIENTO`, `FECHAINGRESO`, `TIENDA_idTIENDA`)"
          ."VALUES ('$idADMIN','$nOMBRE','$aPELLIDO','$pASS_ADMIN','$dIRECCION','$fECHANACIMIENTO','$fECHAINGRESO','$tIENDA_idTIENDA')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Admin en la base de datos.
     * @param admin objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($admin){
      $idADMIN=$admin->getIdADMIN();
$tIENDA_idTIENDA=$admin->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "SELECT `idADMIN`, `NOMBRE`, `APELLIDO`, `PASS_ADMIN`, `DIRECCION`, `FECHANACIMIENTO`, `FECHAINGRESO`, `TIENDA_idTIENDA`"
          ."FROM `admin`"
          ."WHERE `idADMIN`='$idADMIN' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $admin->setIdADMIN($data[$i]['idADMIN']);
          $admin->setNOMBRE($data[$i]['NOMBRE']);
          $admin->setAPELLIDO($data[$i]['APELLIDO']);
          $admin->setPASS_ADMIN($data[$i]['PASS_ADMIN']);
          $admin->setDIRECCION($data[$i]['DIRECCION']);
          $admin->setFECHANACIMIENTO($data[$i]['FECHANACIMIENTO']);
          $admin->setFECHAINGRESO($data[$i]['FECHAINGRESO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $admin->setTIENDA_idTIENDA($tienda);

          }
      return $admin;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Admin en la base de datos.
     * @param admin objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($admin){
      $idADMIN=$admin->getIdADMIN();
$nOMBRE=$admin->getNOMBRE();
$aPELLIDO=$admin->getAPELLIDO();
$pASS_ADMIN=$admin->getPASS_ADMIN();
$dIRECCION=$admin->getDIRECCION();
$fECHANACIMIENTO=$admin->getFECHANACIMIENTO();
$fECHAINGRESO=$admin->getFECHAINGRESO();
$tIENDA_idTIENDA=$admin->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "UPDATE `admin` SET`idADMIN`='$idADMIN' ,`NOMBRE`='$nOMBRE' ,`APELLIDO`='$aPELLIDO' ,`PASS_ADMIN`='$pASS_ADMIN' ,`DIRECCION`='$dIRECCION' ,`FECHANACIMIENTO`='$fECHANACIMIENTO' ,`FECHAINGRESO`='$fECHAINGRESO' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA' WHERE `idADMIN`='$idADMIN' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Admin en la base de datos.
     * @param admin objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($admin){
      $idADMIN=$admin->getIdADMIN();
$tIENDA_idTIENDA=$admin->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="DELETE FROM `admin` WHERE `idADMIN`='$idADMIN' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Admin en la base de datos.
     * @return ArrayList<Admin> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idADMIN`, `NOMBRE`, `APELLIDO`, `PASS_ADMIN`, `DIRECCION`, `FECHANACIMIENTO`, `FECHAINGRESO`, `TIENDA_idTIENDA`"
          ."FROM `admin`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $admin= new Admin();
          $admin->setIdADMIN($data[$i]['idADMIN']);
          $admin->setNOMBRE($data[$i]['NOMBRE']);
          $admin->setAPELLIDO($data[$i]['APELLIDO']);
          $admin->setPASS_ADMIN($data[$i]['PASS_ADMIN']);
          $admin->setDIRECCION($data[$i]['DIRECCION']);
          $admin->setFECHANACIMIENTO($data[$i]['FECHANACIMIENTO']);
          $admin->setFECHAINGRESO($data[$i]['FECHAINGRESO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $admin->setTIENDA_idTIENDA($tienda);

          array_push($lista,$admin);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Admin en la base de datos.
     * @param admin objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Admin> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdADMIN($admin){
      $lista = array();
      $idADMIN=$admin->getIdADMIN();

      try {
          $sql ="SELECT `idADMIN`, `NOMBRE`, `APELLIDO`, `PASS_ADMIN`, `DIRECCION`, `FECHANACIMIENTO`, `FECHAINGRESO`, `TIENDA_idTIENDA`"
          ."FROM `admin`"
          ."WHERE `idADMIN`='$idADMIN'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $admin->setIdADMIN($data[$i]['idADMIN']);
          $admin->setNOMBRE($data[$i]['NOMBRE']);
          $admin->setAPELLIDO($data[$i]['APELLIDO']);
          $admin->setPASS_ADMIN($data[$i]['PASS_ADMIN']);
          $admin->setDIRECCION($data[$i]['DIRECCION']);
          $admin->setFECHANACIMIENTO($data[$i]['FECHANACIMIENTO']);
          $admin->setFECHAINGRESO($data[$i]['FECHAINGRESO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $admin->setTIENDA_idTIENDA($tienda);

          array_push($lista,$admin);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Admin en la base de datos.
     * @param admin objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Admin> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($admin){
      $lista = array();
      $tIENDA_idTIENDA=$admin->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="SELECT `idADMIN`, `NOMBRE`, `APELLIDO`, `PASS_ADMIN`, `DIRECCION`, `FECHANACIMIENTO`, `FECHAINGRESO`, `TIENDA_idTIENDA`"
          ."FROM `admin`"
          ."WHERE `TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $admin->setIdADMIN($data[$i]['idADMIN']);
          $admin->setNOMBRE($data[$i]['NOMBRE']);
          $admin->setAPELLIDO($data[$i]['APELLIDO']);
          $admin->setPASS_ADMIN($data[$i]['PASS_ADMIN']);
          $admin->setDIRECCION($data[$i]['DIRECCION']);
          $admin->setFECHANACIMIENTO($data[$i]['FECHANACIMIENTO']);
          $admin->setFECHAINGRESO($data[$i]['FECHAINGRESO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $admin->setTIENDA_idTIENDA($tienda);

          array_push($lista,$admin);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Admin en la base de datos.
     * @param admin objeto con los atributos de inicio de sesión
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function login($admin){
      $idADMIN=$admin->getNOMBRE();
$pASS_ADMIN=$admin->getPASS_ADMIN();

      $admin = new Admin();
      try {
          $sql= "SELECT `idADMIN`, `NOMBRE`, `APELLIDO`, `PASS_ADMIN`, `DIRECCION`, `FECHANACIMIENTO`, `FECHAINGRESO`, `TIENDA_idTIENDA`"
          ."FROM `admin`"
          ."WHERE `NOMBRE`='$idADMIN' AND`PASS_ADMIN`='$pASS_ADMIN'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $admin->setIdADMIN($data[$i]['idADMIN']);
          $admin->setNOMBRE($data[$i]['NOMBRE']);
          $admin->setAPELLIDO($data[$i]['APELLIDO']);
          $admin->setPASS_ADMIN($data[$i]['PASS_ADMIN']);
          $admin->setDIRECCION($data[$i]['DIRECCION']);
          $admin->setFECHANACIMIENTO($data[$i]['FECHANACIMIENTO']);
          $admin->setFECHAINGRESO($data[$i]['FECHAINGRESO']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $admin->setTIENDA_idTIENDA($tienda);

      return $admin;
          }
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