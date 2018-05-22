<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Vine a Comala porque me dijeron que acá vivía mi padre, un tal Pedro Páramo.  \\

include_once realpath('../..').'\dao\entities\AdminDao.php';
include_once realpath('../..').'\dao\entities\CategoriaDao.php';
include_once realpath('../..').'\dao\entities\ClientesDao.php';
include_once realpath('../..').'\dao\entities\Clientes_has_ventasDao.php';
include_once realpath('../..').'\dao\entities\ProductosDao.php';
include_once realpath('../..').'\dao\entities\ProveedoresDao.php';
include_once realpath('../..').'\dao\entities\TiendaDao.php';
include_once realpath('../..').'\dao\entities\VendedorDao.php';
include_once realpath('../..').'\dao\entities\VentasDao.php';


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de AdminDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AdminDao
     */
     public function getAdminDao($dbName);
     /**
     * Devuelve una instancia de CategoriaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CategoriaDao
     */
     public function getCategoriaDao($dbName);
     /**
     * Devuelve una instancia de ClientesDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ClientesDao
     */
     public function getClientesDao($dbName);
     /**
     * Devuelve una instancia de Clientes_has_ventasDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Clientes_has_ventasDao
     */
     public function getClientes_has_ventasDao($dbName);
     /**
     * Devuelve una instancia de ProductosDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProductosDao
     */
     public function getProductosDao($dbName);
     /**
     * Devuelve una instancia de ProveedoresDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProveedoresDao
     */
     public function getProveedoresDao($dbName);
     /**
     * Devuelve una instancia de TiendaDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TiendaDao
     */
     public function getTiendaDao($dbName);
     /**
     * Devuelve una instancia de VendedorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de VendedorDao
     */
     public function getVendedorDao($dbName);
     /**
     * Devuelve una instancia de VentasDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de VentasDao
     */
     public function getVentasDao($dbName);

}
//That´s all folks!