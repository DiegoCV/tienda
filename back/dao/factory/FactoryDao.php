<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Hecho en sólo 6 días  \\

include_once realpath('../..').'\dao\Conexion\Conexion.php';
include_once realpath('../..').'\dao\interfaz\IFactoryDao.php';

class FactoryDao implements IFactoryDao{
	
     private $conn;
     public static $NULL_GESTOR = -1;
    public static $MYSQL_FACTORY = 0;
    public static $POSTGRESQL_FACTORY = 1;
    public static $ORACLE_FACTORY = 2;
    public static $DERBY_FACTORY = 3;

     public function __construct($gestor){
        $this->conn=new Conexion($gestor);
     }
     /**
     * Devuelve una instancia de AdministradorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AdministradorDao
     */
     public function getAdministradorDao($dbName){
        return new AdministradorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de CategoriaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CategoriaDao
     */
     public function getCategoriaDao($dbName){
        return new CategoriaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ClientesDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ClientesDao
     */
     public function getClientesDao($dbName){
        return new ClientesDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ProductosDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProductosDao
     */
     public function getProductosDao($dbName){
        return new ProductosDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de ProveedoresDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProveedoresDao
     */
     public function getProveedoresDao($dbName){
        return new ProveedoresDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de TiendaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TiendaDao
     */
     public function getTiendaDao($dbName){
        return new TiendaDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de VendedorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de VendedorDao
     */
     public function getVendedorDao($dbName){
        return new VendedorDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de VentasDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de VentasDao
     */
     public function getVentasDao($dbName){
        return new VentasDao($this->conn->obtener($dbName));
    }
     /**
     * Devuelve una instancia de Ventas_has_productosDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Ventas_has_productosDao
     */
     public function getVentas_has_productosDao($dbName){
        return new Ventas_has_productosDao($this->conn->obtener($dbName));
    }

}
//That´s all folks!