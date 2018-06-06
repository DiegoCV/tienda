<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bastará decir que soy Juan Pablo Castel, el pintor que mató a María Iribarne...  \\

include_once realpath('../..').'\dao\interfaz\IVentasDao.php';
include_once realpath('../..').'\dto\Ventas.php';
include_once realpath('../..').'\dto\Clientes.php';
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
$fECHACOMPRA_VENTAS=$ventas->getFECHACOMPRA_VENTAS();
$cLIENTES_idCLIENTES=$ventas->getCLIENTES_idCLIENTES()->getIdCLIENTES();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getIdVENDEDOR();

      try {
          $sql= "INSERT INTO `ventas`( `idVENTAS`, `IVA_VENTAS`, `FECHACOMPRA_VENTAS`, `CLIENTES_idCLIENTES`, `VENDEDOR_idVENDEDOR`)"
          ."VALUES ('$idVENTAS','$iVA_VENTAS','$fECHACOMPRA_VENTAS','$cLIENTES_idCLIENTES','$vENDEDOR_idVENDEDOR')";
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

      try {
          $sql= "SELECT `idVENTAS`, `IVA_VENTAS`, `FECHACOMPRA_VENTAS`, `CLIENTES_idCLIENTES`, `VENDEDOR_idVENDEDOR`"
          ."FROM `ventas`"
          ."WHERE `idVENTAS`='$idVENTAS'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $ventas->setIdVENTAS($data[$i]['idVENTAS']);
          $ventas->setIVA_VENTAS($data[$i]['IVA_VENTAS']);
          $ventas->setFECHACOMPRA_VENTAS($data[$i]['FECHACOMPRA_VENTAS']);
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_idCLIENTES']);
           $ventas->setCLIENTES_idCLIENTES($clientes);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_idVENDEDOR']);
           $ventas->setVENDEDOR_idVENDEDOR($vendedor);

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
$fECHACOMPRA_VENTAS=$ventas->getFECHACOMPRA_VENTAS();
$cLIENTES_idCLIENTES=$ventas->getCLIENTES_idCLIENTES()->getIdCLIENTES();
$vENDEDOR_idVENDEDOR=$ventas->getVENDEDOR_idVENDEDOR()->getIdVENDEDOR();

      try {
          $sql= "UPDATE `ventas` SET`idVENTAS`='$idVENTAS' ,`IVA_VENTAS`='$iVA_VENTAS' ,`FECHACOMPRA_VENTAS`='$fECHACOMPRA_VENTAS' ,`CLIENTES_idCLIENTES`='$cLIENTES_idCLIENTES' ,`VENDEDOR_idVENDEDOR`='$vENDEDOR_idVENDEDOR' WHERE `idVENTAS`='$idVENTAS'";
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

      try {
          $sql ="DELETE FROM `ventas` WHERE `idVENTAS`='$idVENTAS'";
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
          $sql ="SELECT `idVENTAS`, `IVA_VENTAS`, `FECHACOMPRA_VENTAS`, `CLIENTES_idCLIENTES`, `VENDEDOR_idVENDEDOR`"
          ."FROM `ventas`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $ventas= new Ventas();
          $ventas->setIdVENTAS($data[$i]['idVENTAS']);
          $ventas->setIVA_VENTAS($data[$i]['IVA_VENTAS']);
          $ventas->setFECHACOMPRA_VENTAS($data[$i]['FECHACOMPRA_VENTAS']);
           $clientes = new Clientes();
           $clientes->setIdCLIENTES($data[$i]['CLIENTES_idCLIENTES']);
           $ventas->setCLIENTES_idCLIENTES($clientes);
           $vendedor = new Vendedor();
           $vendedor->setIdVENDEDOR($data[$i]['VENDEDOR_idVENDEDOR']);
           $ventas->setVENDEDOR_idVENDEDOR($vendedor);

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