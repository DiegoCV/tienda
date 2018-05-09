<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    gravitaban alrededor del astro de la noche, y por primera vez podía la vista penetrar todos sus misterios.  \\

include_once realpath('../..').'\dao\interfaz\ITiendaDao.php';
include_once realpath('../..').'\dto\Tienda.php';

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
$rEPRESENTATE_TIENDA=$tienda->getREPRESENTATE_TIENDA();

      try {
          $sql= "INSERT INTO `tienda`( `idTIENDA`, `NOMBRE_TIENDA`, `DIERECCION_TIENDA`, `NIT_TIENDA`, `REPRESENTATE_TIENDA`)"
          ."VALUES ('$idTIENDA','$nOMBRE_TIENDA','$dIERECCION_TIENDA','$nIT_TIENDA','$rEPRESENTATE_TIENDA')";
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
          $sql= "SELECT `idTIENDA`, `NOMBRE_TIENDA`, `DIERECCION_TIENDA`, `NIT_TIENDA`, `REPRESENTATE_TIENDA`"
          ."FROM `tienda`"
          ."WHERE `idTIENDA`='$idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tienda->setIdTIENDA($data[$i]['idTIENDA']);
          $tienda->setNOMBRE_TIENDA($data[$i]['NOMBRE_TIENDA']);
          $tienda->setDIERECCION_TIENDA($data[$i]['DIERECCION_TIENDA']);
          $tienda->setNIT_TIENDA($data[$i]['NIT_TIENDA']);
          $tienda->setREPRESENTATE_TIENDA($data[$i]['REPRESENTATE_TIENDA']);

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
$rEPRESENTATE_TIENDA=$tienda->getREPRESENTATE_TIENDA();

      try {
          $sql= "UPDATE `tienda` SET`idTIENDA`='$idTIENDA' ,`NOMBRE_TIENDA`='$nOMBRE_TIENDA' ,`DIERECCION_TIENDA`='$dIERECCION_TIENDA' ,`NIT_TIENDA`='$nIT_TIENDA' ,`REPRESENTATE_TIENDA`='$rEPRESENTATE_TIENDA' WHERE `idTIENDA`='$idTIENDA'";
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
          $sql ="SELECT `idTIENDA`, `NOMBRE_TIENDA`, `DIERECCION_TIENDA`, `NIT_TIENDA`, `REPRESENTATE_TIENDA`"
          ."FROM `tienda`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tienda= new Tienda();
          $tienda->setIdTIENDA($data[$i]['idTIENDA']);
          $tienda->setNOMBRE_TIENDA($data[$i]['NOMBRE_TIENDA']);
          $tienda->setDIERECCION_TIENDA($data[$i]['DIERECCION_TIENDA']);
          $tienda->setNIT_TIENDA($data[$i]['NIT_TIENDA']);
          $tienda->setREPRESENTATE_TIENDA($data[$i]['REPRESENTATE_TIENDA']);

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