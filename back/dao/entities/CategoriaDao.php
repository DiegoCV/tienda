<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\

include_once realpath('../..').'\dao\interfaz\ICategoriaDao.php';
include_once realpath('../..').'\dto\Categoria.php';

class CategoriaDao implements ICategoriaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Categoria en la base de datos.
     * @param categoria objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($categoria){
      $idCATEGORIA=$categoria->getIdCATEGORIA();
$dESCRIPCION=$categoria->getDESCRIPCION();

      try {
          $sql= "INSERT INTO `categoria`( `idCATEGORIA`, `DESCRIPCION`)"
          ."VALUES ('$idCATEGORIA','$dESCRIPCION')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Categoria en la base de datos.
     * @param categoria objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($categoria){
      $idCATEGORIA=$categoria->getIdCATEGORIA();

      try {
          $sql= "SELECT `idCATEGORIA`, `DESCRIPCION`"
          ."FROM `categoria`"
          ."WHERE `idCATEGORIA`='$idCATEGORIA'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $categoria->setIdCATEGORIA($data[$i]['idCATEGORIA']);
          $categoria->setDESCRIPCION($data[$i]['DESCRIPCION']);

          }
      return $categoria;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Categoria en la base de datos.
     * @param categoria objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($categoria){
      $idCATEGORIA=$categoria->getIdCATEGORIA();
$dESCRIPCION=$categoria->getDESCRIPCION();

      try {
          $sql= "UPDATE `categoria` SET`idCATEGORIA`='$idCATEGORIA' ,`DESCRIPCION`='$dESCRIPCION' WHERE `idCATEGORIA`='$idCATEGORIA'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Categoria en la base de datos.
     * @param categoria objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($categoria){
      $idCATEGORIA=$categoria->getIdCATEGORIA();

      try {
          $sql ="DELETE FROM `categoria` WHERE `idCATEGORIA`='$idCATEGORIA'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Categoria en la base de datos.
     * @return ArrayList<Categoria> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idCATEGORIA`, `DESCRIPCION`"
          ."FROM `categoria`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $categoria= new Categoria();
          $categoria->setIdCATEGORIA($data[$i]['idCATEGORIA']);
          $categoria->setDESCRIPCION($data[$i]['DESCRIPCION']);

          array_push($lista,$categoria);
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