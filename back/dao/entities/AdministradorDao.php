<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    El gran hermano te vigila  \\

include_once realpath('../..').'\dao\interfaz\IAdministradorDao.php';
include_once realpath('../..').'\dto\Administrador.php';

class AdministradorDao implements IAdministradorDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Administrador en la base de datos.
     * @param administrador objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($administrador){
     // $idADMINISTRADOR=$administrador->getIdADMINISTRADOR();
$nOMBRE=$administrador->getNOMBRE();
$aPELLIDO=$administrador->getAPELLIDO();
$uSUARIO=$administrador->getUSUARIO();
$pASS=$administrador->getPASS();

      try {
          $sql= "INSERT INTO `administrador`(`NOMBRE`, `APELLIDO`, `USUARIO`, `PASS`)"
          ."VALUES ('$nOMBRE','$aPELLIDO','$uSUARIO','$pASS')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Administrador en la base de datos.
     * @param administrador objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($administrador){
      $idADMINISTRADOR=$administrador->getIdADMINISTRADOR();

      try {
          $sql= "SELECT `idADMINISTRADOR`, `NOMBRE`, `APELLIDO`, `USUARIO`, `PASS`"
          ."FROM `administrador`"
          ."WHERE `idADMINISTRADOR`='$idADMINISTRADOR'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $administrador->setIdADMINISTRADOR($data[$i]['idADMINISTRADOR']);
          $administrador->setNOMBRE($data[$i]['NOMBRE']);
          $administrador->setAPELLIDO($data[$i]['APELLIDO']);
          $administrador->setUSUARIO($data[$i]['USUARIO']);
          $administrador->setPASS($data[$i]['PASS']);

          }
      return $administrador;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Administrador en la base de datos.
     * @param administrador objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($administrador){
      $idADMINISTRADOR=$administrador->getIdADMINISTRADOR();
$nOMBRE=$administrador->getNOMBRE();
$aPELLIDO=$administrador->getAPELLIDO();
$uSUARIO=$administrador->getUSUARIO();
$pASS=$administrador->getPASS();

      try {
          $sql= "UPDATE `administrador` SET`idADMINISTRADOR`='$idADMINISTRADOR' ,`NOMBRE`='$nOMBRE' ,`APELLIDO`='$aPELLIDO' ,`USUARIO`='$uSUARIO' ,`PASS`='$pASS' WHERE `idADMINISTRADOR`='$idADMINISTRADOR'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Administrador en la base de datos.
     * @param administrador objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($administrador){
      $idADMINISTRADOR=$administrador->getIdADMINISTRADOR();

      try {
          $sql ="DELETE FROM `administrador` WHERE `idADMINISTRADOR`='$idADMINISTRADOR'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Administrador en la base de datos.
     * @return ArrayList<Administrador> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idADMINISTRADOR`, `NOMBRE`, `APELLIDO`, `USUARIO`, `PASS`"
          ."FROM `administrador`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $administrador= new Administrador();
          $administrador->setIdADMINISTRADOR($data[$i]['idADMINISTRADOR']);
          $administrador->setNOMBRE($data[$i]['NOMBRE']);
          $administrador->setAPELLIDO($data[$i]['APELLIDO']);
          $administrador->setUSUARIO($data[$i]['USUARIO']);
          $administrador->setPASS($data[$i]['PASS']);

          array_push($lista,$administrador);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Administrador en la base de datos.
     * @param administrador objeto con los atributos de inicio de sesión
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function login($administrador){
      $uSUARIO=$administrador->getUSUARIO();
$pASS=$administrador->getPASS();

      $administrador = new Administrador();
      try {
          $sql= "SELECT `idADMINISTRADOR`, `NOMBRE`, `APELLIDO`, `USUARIO`, `PASS`"
          ."FROM `administrador`"
          ."WHERE `USUARIO`='$uSUARIO' AND`PASS`='$pASS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $administrador->setIdADMINISTRADOR($data[$i]['idADMINISTRADOR']);
          $administrador->setNOMBRE($data[$i]['NOMBRE']);
          $administrador->setAPELLIDO($data[$i]['APELLIDO']);
          $administrador->setUSUARIO($data[$i]['USUARIO']);
          $administrador->setPASS($data[$i]['PASS']);

      return $administrador;
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