<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ella existió sólo en un sueño. Él es un poema que el poeta nunca escribió.  \\

include_once realpath('../..').'\dao\interfaz\ITiendaDao.php';
include_once realpath('../..').'\dto\Tienda.php';
include_once realpath('../..').'\dto\Administrador.php';

class TiendaDao implements ITiendaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Tienda en la base de datos.
     * @param tienda objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tienda){
      $idTIENDA=$tienda->getIdTIENDA();
$nOMBRE_TIENDA=$tienda->getNOMBRE_TIENDA();
$dIERECCION_TIENDA=$tienda->getDIERECCION_TIENDA();
$nIT_TIENDA=$tienda->getNIT_TIENDA();
$dIRECCION_TIENDA=$tienda->getDIRECCION_TIENDA();
$aDMINISTRADOR_idADMINISTRADOR=$tienda->getADMINISTRADOR_idADMINISTRADOR()->getIdADMINISTRADOR();

      try {
          $sql= "INSERT INTO `tienda`(`NOMBRE_TIENDA`, `DIERECCION_TIENDA`, `NIT_TIENDA`, `DIRECCION_TIENDA`, `ADMINISTRADOR_idADMINISTRADOR`)"
          ."VALUES ('$nOMBRE_TIENDA','$dIERECCION_TIENDA','$nIT_TIENDA','$dIRECCION_TIENDA','$aDMINISTRADOR_idADMINISTRADOR')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tienda en la base de datos.
     * @param tienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tienda){
      $idTIENDA=$tienda->getIdTIENDA();

      try {
          $sql= "SELECT `idTIENDA`, `NOMBRE_TIENDA`, `DIERECCION_TIENDA`, `NIT_TIENDA`, `DIRECCION_TIENDA`, `ADMINISTRADOR_idADMINISTRADOR`"
          ."FROM `tienda`"
          ."WHERE `idTIENDA`='$idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tienda->setIdTIENDA($data[$i]['idTIENDA']);
          $tienda->setNOMBRE_TIENDA($data[$i]['NOMBRE_TIENDA']);
          $tienda->setDIERECCION_TIENDA($data[$i]['DIERECCION_TIENDA']);
          $tienda->setNIT_TIENDA($data[$i]['NIT_TIENDA']);
          $tienda->setDIRECCION_TIENDA($data[$i]['DIRECCION_TIENDA']);
           $administrador = new Administrador();
           $administrador->setIdADMINISTRADOR($data[$i]['ADMINISTRADOR_idADMINISTRADOR']);
           $tienda->setADMINISTRADOR_idADMINISTRADOR($administrador);

          }
      return $tienda;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Tienda en la base de datos.
     * @param tienda objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tienda){
      $idTIENDA=$tienda->getIdTIENDA();
$nOMBRE_TIENDA=$tienda->getNOMBRE_TIENDA();
$dIERECCION_TIENDA=$tienda->getDIERECCION_TIENDA();
$nIT_TIENDA=$tienda->getNIT_TIENDA();
$dIRECCION_TIENDA=$tienda->getDIRECCION_TIENDA();
$aDMINISTRADOR_idADMINISTRADOR=$tienda->getADMINISTRADOR_idADMINISTRADOR()->getIdADMINISTRADOR();

      try {
          $sql= "UPDATE `tienda` SET`idTIENDA`='$idTIENDA' ,`NOMBRE_TIENDA`='$nOMBRE_TIENDA' ,`DIERECCION_TIENDA`='$dIERECCION_TIENDA' ,`NIT_TIENDA`='$nIT_TIENDA' ,`DIRECCION_TIENDA`='$dIRECCION_TIENDA' ,`ADMINISTRADOR_idADMINISTRADOR`='$aDMINISTRADOR_idADMINISTRADOR' WHERE `idTIENDA`='$idTIENDA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Tienda en la base de datos.
     * @param tienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tienda){
      $idTIENDA=$tienda->getIdTIENDA();

      try {
          $sql ="DELETE FROM `tienda` WHERE `idTIENDA`='$idTIENDA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tienda en la base de datos.
     * @return ArrayList<Tienda> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idTIENDA`, `NOMBRE_TIENDA`, `DIERECCION_TIENDA`, `NIT_TIENDA`, `DIRECCION_TIENDA`, `ADMINISTRADOR_idADMINISTRADOR`"
          ."FROM `tienda`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tienda= new Tienda();
          $tienda->setIdTIENDA($data[$i]['idTIENDA']);
          $tienda->setNOMBRE_TIENDA($data[$i]['NOMBRE_TIENDA']);
          $tienda->setDIERECCION_TIENDA($data[$i]['DIERECCION_TIENDA']);
          $tienda->setNIT_TIENDA($data[$i]['NIT_TIENDA']);
          $tienda->setDIRECCION_TIENDA($data[$i]['DIRECCION_TIENDA']);
           $administrador = new Administrador();
           $administrador->setIdADMINISTRADOR($data[$i]['ADMINISTRADOR_idADMINISTRADOR']);
           $tienda->setADMINISTRADOR_idADMINISTRADOR($administrador);

          array_push($lista,$tienda);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
  
   public function listByUsuario($usuario){
      $lista = array();
      try {
          $sql ="SELECT `idTIENDA`, `NOMBRE_TIENDA`, `DIERECCION_TIENDA`, `NIT_TIENDA`, `DIRECCION_TIENDA`, `ADMINISTRADOR_idADMINISTRADOR`"
          ."FROM `tienda`"
          ."WHERE `ADMINISTRADOR_idADMINISTRADOR` = $usuario";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tienda= new Tienda();
          $tienda->setIdTIENDA($data[$i]['idTIENDA']);
          $tienda->setNOMBRE_TIENDA($data[$i]['NOMBRE_TIENDA']);
          $tienda->setDIERECCION_TIENDA($data[$i]['DIERECCION_TIENDA']);
          $tienda->setNIT_TIENDA($data[$i]['NIT_TIENDA']);
          $tienda->setDIRECCION_TIENDA($data[$i]['DIRECCION_TIENDA']);
           $administrador = new Administrador();
           $administrador->setIdADMINISTRADOR($data[$i]['ADMINISTRADOR_idADMINISTRADOR']);
           $tienda->setADMINISTRADOR_idADMINISTRADOR($administrador);

          array_push($lista,$tienda);
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