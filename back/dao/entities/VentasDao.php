<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿Eres capaz de hackear mi Facebook?  \\

include_once realpath('../..').'\dao\interfaz\IVentasDao.php';
include_once realpath('../..').'\dto\Ventas.php';
include_once realpath('../..').'\dto\Vendedor.php';
include_once realpath('../..').'\dto\Vendedor.php';

class VentasDao implements IVentasDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Ventas en la base de datos.
     * @param ventas objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($ventas){
      $idVENTAS=$ventas->getIdVENTAS();
$iVA_VENTAS=$ventas->getIVA_VENTAS();
$iMPUESTOCONSUMO_VENTAS=$ventas->getIMPUESTOCONSUMO_VENTAS();
$fECHACOMPRA_VENTAS=$ventas->getFECHACOMPRA_VENTAS();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getIdVENDEDOR();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getTIENDA_idTIENDA();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getIdVENDEDOR();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql= "INSERT INTO `ventas`( `idVENTAS`, `IVA_VENTAS`, `IMPUESTOCONSUMO_VENTAS`, `FECHACOMPRA_VENTAS`, `VENDEDOR_idVENDEDOR`, `VENDEDOR_TIENDA_idTIENDA`)"
          ."VALUES ('$idVENTAS','$iVA_VENTAS','$iMPUESTOCONSUMO_VENTAS','$fECHACOMPRA_VENTAS','$vENDEDOR_idVENDEDOR','$vENDEDOR_idVENDEDOR','$vENDEDOR_TIENDA_idTIENDA','$vENDEDOR_TIENDA_idTIENDA')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Ventas en la base de datos.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($ventas){
      $idVENTAS=$ventas->getIdVENTAS();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getIdVENDEDOR();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getTIENDA_idTIENDA();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getIdVENDEDOR();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql= "SELECT `idVENTAS`, `IVA_VENTAS`, `IMPUESTOCONSUMO_VENTAS`, `FECHACOMPRA_VENTAS`, `VENDEDOR_idVENDEDOR`, `VENDEDOR_TIENDA_idTIENDA`"
          ."FROM `ventas`"
          ."WHERE `idVENTAS`='$idVENTAS' AND`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' AND`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' AND`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA' AND`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $ventas->setIdVENTAS($data[$i]['idVENTAS']);
          $ventas->setIVA_VENTAS($data[$i]['IVA_VENTAS']);
          $ventas->setIMPUESTOCONSUMO_VENTAS($data[$i]['IMPUESTOCONSUMO_VENTAS']);
          $ventas->setFECHACOMPRA_VENTAS($data[$i]['FECHACOMPRA_VENTAS']);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_idVENDEDOR']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_idVENDEDOR']);
           $ventas->setVENDEDOR_idVENDEDOR($vendedor);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($vendedor);

          }
      return $ventas;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Ventas en la base de datos.
     * @param ventas objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($ventas){
      $idVENTAS=$ventas->getIdVENTAS();
$iVA_VENTAS=$ventas->getIVA_VENTAS();
$iMPUESTOCONSUMO_VENTAS=$ventas->getIMPUESTOCONSUMO_VENTAS();
$fECHACOMPRA_VENTAS=$ventas->getFECHACOMPRA_VENTAS();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getIdVENDEDOR();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getTIENDA_idTIENDA();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getIdVENDEDOR();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql= "UPDATE `ventas` SET`idVENTAS`='$idVENTAS' ,`IVA_VENTAS`='$iVA_VENTAS' ,`IMPUESTOCONSUMO_VENTAS`='$iMPUESTOCONSUMO_VENTAS' ,`FECHACOMPRA_VENTAS`='$fECHACOMPRA_VENTAS' ,`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' ,`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' ,`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA' ,`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA' WHERE `idVENTAS`='$idVENTAS' ,`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' ,`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' ,`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA' ,`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Ventas en la base de datos.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($ventas){
      $idVENTAS=$ventas->getIdVENTAS();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getIdVENDEDOR();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getTIENDA_idTIENDA();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getIdVENDEDOR();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql ="DELETE FROM `ventas` WHERE `idVENTAS`='$idVENTAS' AND`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' AND`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' AND`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA' AND`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Ventas en la base de datos.
     * @return ArrayList<Ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idVENTAS`, `IVA_VENTAS`, `IMPUESTOCONSUMO_VENTAS`, `FECHACOMPRA_VENTAS`, `VENDEDOR_idVENDEDOR`, `VENDEDOR_TIENDA_idTIENDA`"
          ."FROM `ventas`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $ventas= new Ventas();
          $ventas->setIdVENTAS($data[$i]['idVENTAS']);
          $ventas->setIVA_VENTAS($data[$i]['IVA_VENTAS']);
          $ventas->setIMPUESTOCONSUMO_VENTAS($data[$i]['IMPUESTOCONSUMO_VENTAS']);
          $ventas->setFECHACOMPRA_VENTAS($data[$i]['FECHACOMPRA_VENTAS']);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_idVENDEDOR']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_idVENDEDOR']);
           $ventas->setVENDEDOR_idVENDEDOR($vendedor);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($vendedor);

          array_push($lista,$ventas);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Ventas en la base de datos.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdVENTAS($ventas){
      $lista = array();
      $idVENTAS=$ventas->getIdVENTAS();

      try {
          $sql ="SELECT `idVENTAS`, `IVA_VENTAS`, `IMPUESTOCONSUMO_VENTAS`, `FECHACOMPRA_VENTAS`, `VENDEDOR_idVENDEDOR`, `VENDEDOR_TIENDA_idTIENDA`"
          ."FROM `ventas`"
          ."WHERE `idVENTAS`='$idVENTAS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $ventas->setIdVENTAS($data[$i]['idVENTAS']);
          $ventas->setIVA_VENTAS($data[$i]['IVA_VENTAS']);
          $ventas->setIMPUESTOCONSUMO_VENTAS($data[$i]['IMPUESTOCONSUMO_VENTAS']);
          $ventas->setFECHACOMPRA_VENTAS($data[$i]['FECHACOMPRA_VENTAS']);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_idVENDEDOR']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_idVENDEDOR']);
           $ventas->setVENDEDOR_idVENDEDOR($vendedor);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($vendedor);

          array_push($lista,$ventas);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Ventas en la base de datos.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByVENDEDOR_idVENDEDOR($ventas){
      $lista = array();
      $vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getIdVENDEDOR();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getTIENDA_idTIENDA();

      try {
          $sql ="SELECT `idVENTAS`, `IVA_VENTAS`, `IMPUESTOCONSUMO_VENTAS`, `FECHACOMPRA_VENTAS`, `VENDEDOR_idVENDEDOR`, `VENDEDOR_TIENDA_idTIENDA`"
          ."FROM `ventas`"
          ."WHERE `VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' AND`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $ventas->setIdVENTAS($data[$i]['idVENTAS']);
          $ventas->setIVA_VENTAS($data[$i]['IVA_VENTAS']);
          $ventas->setIMPUESTOCONSUMO_VENTAS($data[$i]['IMPUESTOCONSUMO_VENTAS']);
          $ventas->setFECHACOMPRA_VENTAS($data[$i]['FECHACOMPRA_VENTAS']);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_idVENDEDOR']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_idVENDEDOR']);
           $ventas->setVENDEDOR_idVENDEDOR($vendedor);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($vendedor);

          array_push($lista,$ventas);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Ventas en la base de datos.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByVENDEDOR_TIENDA_idTIENDA($ventas){
      $lista = array();
      $vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getIdVENDEDOR();
$vENDEDOR_TIENDA_idTIENDA=$ventas->getVENDEDOR_TIENDA_idTIENDA()->getTIENDA_idTIENDA();

      try {
          $sql ="SELECT `idVENTAS`, `IVA_VENTAS`, `IMPUESTOCONSUMO_VENTAS`, `FECHACOMPRA_VENTAS`, `VENDEDOR_idVENDEDOR`, `VENDEDOR_TIENDA_idTIENDA`"
          ."FROM `ventas`"
          ."WHERE `VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA' AND`VENDEDOR_TIENDA_idTIENDA`='$vENDEDOR_TIENDA_idTIENDA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $ventas->setIdVENTAS($data[$i]['idVENTAS']);
          $ventas->setIVA_VENTAS($data[$i]['IVA_VENTAS']);
          $ventas->setIMPUESTOCONSUMO_VENTAS($data[$i]['IMPUESTOCONSUMO_VENTAS']);
          $ventas->setFECHACOMPRA_VENTAS($data[$i]['FECHACOMPRA_VENTAS']);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_idVENDEDOR']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_idVENDEDOR']);
           $ventas->setVENDEDOR_idVENDEDOR($vendedor);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $vendedor->setTIENDA_idTIENDA($data[$i]['VENDEDOR_TIENDA_idTIENDA']);
           $ventas->setVENDEDOR_TIENDA_idTIENDA($vendedor);

          array_push($lista,$ventas);
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