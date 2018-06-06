<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) *Nostalgia  \\

include_once realpath('../..').'\dao\entities\AdministradorDao.php';
include_once realpath('../..').'\dao\entities\CategoriaDao.php';
include_once realpath('../..').'\dao\entities\ClientesDao.php';
include_once realpath('../..').'\dao\entities\ProductosDao.php';
include_once realpath('../..').'\dao\entities\ProveedoresDao.php';
include_once realpath('../..').'\dao\entities\TiendaDao.php';
include_once realpath('../..').'\dao\entities\VendedorDao.php';
include_once realpath('../..').'\dao\entities\VentasDao.php';
include_once realpath('../..').'\dao\entities\Ventas_has_productosDao.php';


interface IFactoryDao {
	
     /**
     * Devuelve una instancia de AdministradorDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de AdministradorDao
     */
     public function getAdministradorDao($dbName);
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
     /**
     * Devuelve una instancia de Ventas_has_productosDao con una conexión que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Ventas_has_productosDao
     */
     public function getVentas_has_productosDao($dbName);

}
//That´s all folks!