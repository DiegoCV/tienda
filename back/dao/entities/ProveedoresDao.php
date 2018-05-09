<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Oh! (°o° ) ¡es Fredy Arciniegas, el intelectualoide millonario!  \\

include_once realpath('../..').'\dao\interfaz\IProveedoresDao.php';
include_once realpath('../..').'\dto\Proveedores.php';
include_once realpath('../..').'\dto\Tienda.php';

class ProveedoresDao implements IProveedoresDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Proveedores en la base de datos.
     * @param proveedores objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($proveedores){
      $idPROVEEDORES=$proveedores->getIdPROVEEDORES();
$nOMBREEMPRESA_PROVEEDORES=$proveedores->getNOMBREEMPRESA_PROVEEDORES();
$nOMBREEMPLEADO_PROVEEDORES=$proveedores->getNOMBREEMPLEADO_PROVEEDORES();
$dESCUENTO_PROVEEDOR=$proveedores->getDESCUENTO_PROVEEDOR();
$fECHAINGRESO_PROVEEDORES=$proveedores->getFECHAINGRESO_PROVEEDORES();
$tIENDA_idTIENDA=$proveedores->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "INSERT INTO `proveedores`( `idPROVEEDORES`, `NOMBREEMPRESA_PROVEEDORES`, `NOMBREEMPLEADO_PROVEEDORES`, `DESCUENTO_PROVEEDOR`, `FECHAINGRESO_PROVEEDORES`, `TIENDA_idTIENDA`)"
          ."VALUES ('$idPROVEEDORES','$nOMBREEMPRESA_PROVEEDORES','$nOMBREEMPLEADO_PROVEEDORES','$dESCUENTO_PROVEEDOR','$fECHAINGRESO_PROVEEDORES','$tIENDA_idTIENDA')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($proveedores){
      $idPROVEEDORES=$proveedores->getIdPROVEEDORES();
$tIENDA_idTIENDA=$proveedores->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "SELECT `idPROVEEDORES`, `NOMBREEMPRESA_PROVEEDORES`, `NOMBREEMPLEADO_PROVEEDORES`, `DESCUENTO_PROVEEDOR`, `FECHAINGRESO_PROVEEDORES`, `TIENDA_idTIENDA`"
          ."FROM `proveedores`"
          ."WHERE `idPROVEEDORES`='$idPROVEEDORES' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $proveedores->setIdPROVEEDORES($data[$i]['idPROVEEDORES']);
          $proveedores->setNOMBREEMPRESA_PROVEEDORES($data[$i]['NOMBREEMPRESA_PROVEEDORES']);
          $proveedores->setNOMBREEMPLEADO_PROVEEDORES($data[$i]['NOMBREEMPLEADO_PROVEEDORES']);
          $proveedores->setDESCUENTO_PROVEEDOR($data[$i]['DESCUENTO_PROVEEDOR']);
          $proveedores->setFECHAINGRESO_PROVEEDORES($data[$i]['FECHAINGRESO_PROVEEDORES']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($tienda);

          }
      return $proveedores;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($proveedores){
      $idPROVEEDORES=$proveedores->getIdPROVEEDORES();
$nOMBREEMPRESA_PROVEEDORES=$proveedores->getNOMBREEMPRESA_PROVEEDORES();
$nOMBREEMPLEADO_PROVEEDORES=$proveedores->getNOMBREEMPLEADO_PROVEEDORES();
$dESCUENTO_PROVEEDOR=$proveedores->getDESCUENTO_PROVEEDOR();
$fECHAINGRESO_PROVEEDORES=$proveedores->getFECHAINGRESO_PROVEEDORES();
$tIENDA_idTIENDA=$proveedores->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql= "UPDATE `proveedores` SET`idPROVEEDORES`='$idPROVEEDORES' ,`NOMBREEMPRESA_PROVEEDORES`='$nOMBREEMPRESA_PROVEEDORES' ,`NOMBREEMPLEADO_PROVEEDORES`='$nOMBREEMPLEADO_PROVEEDORES' ,`DESCUENTO_PROVEEDOR`='$dESCUENTO_PROVEEDOR' ,`FECHAINGRESO_PROVEEDORES`='$fECHAINGRESO_PROVEEDORES' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA' WHERE `idPROVEEDORES`='$idPROVEEDORES' ,`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($proveedores){
      $idPROVEEDORES=$proveedores->getIdPROVEEDORES();
$tIENDA_idTIENDA=$proveedores->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="DELETE FROM `proveedores` WHERE `idPROVEEDORES`='$idPROVEEDORES' AND`TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Proveedores en la base de datos.
     * @return ArrayList<Proveedores> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idPROVEEDORES`, `NOMBREEMPRESA_PROVEEDORES`, `NOMBREEMPLEADO_PROVEEDORES`, `DESCUENTO_PROVEEDOR`, `FECHAINGRESO_PROVEEDORES`, `TIENDA_idTIENDA`"
          ."FROM `proveedores`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $proveedores= new Proveedores();
          $proveedores->setIdPROVEEDORES($data[$i]['idPROVEEDORES']);
          $proveedores->setNOMBREEMPRESA_PROVEEDORES($data[$i]['NOMBREEMPRESA_PROVEEDORES']);
          $proveedores->setNOMBREEMPLEADO_PROVEEDORES($data[$i]['NOMBREEMPLEADO_PROVEEDORES']);
          $proveedores->setDESCUENTO_PROVEEDOR($data[$i]['DESCUENTO_PROVEEDOR']);
          $proveedores->setFECHAINGRESO_PROVEEDORES($data[$i]['FECHAINGRESO_PROVEEDORES']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($tienda);

          array_push($lista,$proveedores);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Proveedores> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdPROVEEDORES($proveedores){
      $lista = array();
      $idPROVEEDORES=$proveedores->getIdPROVEEDORES();

      try {
          $sql ="SELECT `idPROVEEDORES`, `NOMBREEMPRESA_PROVEEDORES`, `NOMBREEMPLEADO_PROVEEDORES`, `DESCUENTO_PROVEEDOR`, `FECHAINGRESO_PROVEEDORES`, `TIENDA_idTIENDA`"
          ."FROM `proveedores`"
          ."WHERE `idPROVEEDORES`='$idPROVEEDORES'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $proveedores->setIdPROVEEDORES($data[$i]['idPROVEEDORES']);
          $proveedores->setNOMBREEMPRESA_PROVEEDORES($data[$i]['NOMBREEMPRESA_PROVEEDORES']);
          $proveedores->setNOMBREEMPLEADO_PROVEEDORES($data[$i]['NOMBREEMPLEADO_PROVEEDORES']);
          $proveedores->setDESCUENTO_PROVEEDOR($data[$i]['DESCUENTO_PROVEEDOR']);
          $proveedores->setFECHAINGRESO_PROVEEDORES($data[$i]['FECHAINGRESO_PROVEEDORES']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($tienda);

          array_push($lista,$proveedores);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Proveedores en la base de datos.
     * @param proveedores objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Proveedores> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($proveedores){
      $lista = array();
      $tIENDA_idTIENDA=$proveedores->getTIENDA_idTIENDA()->getIdTIENDA();

      try {
          $sql ="SELECT `idPROVEEDORES`, `NOMBREEMPRESA_PROVEEDORES`, `NOMBREEMPLEADO_PROVEEDORES`, `DESCUENTO_PROVEEDOR`, `FECHAINGRESO_PROVEEDORES`, `TIENDA_idTIENDA`"
          ."FROM `proveedores`"
          ."WHERE `TIENDA_idTIENDA`='$tIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $proveedores->setIdPROVEEDORES($data[$i]['idPROVEEDORES']);
          $proveedores->setNOMBREEMPRESA_PROVEEDORES($data[$i]['NOMBREEMPRESA_PROVEEDORES']);
          $proveedores->setNOMBREEMPLEADO_PROVEEDORES($data[$i]['NOMBREEMPLEADO_PROVEEDORES']);
          $proveedores->setDESCUENTO_PROVEEDOR($data[$i]['DESCUENTO_PROVEEDOR']);
          $proveedores->setFECHAINGRESO_PROVEEDORES($data[$i]['FECHAINGRESO_PROVEEDORES']);
           $tienda = new Tienda();
           $tienda->setIdTIENDA($data[$i]['TIENDA_idTIENDA']);
           $proveedores->setTIENDA_idTIENDA($tienda);

          array_push($lista,$proveedores);
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