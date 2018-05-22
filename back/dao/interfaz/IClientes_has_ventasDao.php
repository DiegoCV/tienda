<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Ojos de perro azul  \\


interface IClientes_has_ventasDao {

    /**
     * Guarda un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($clientes_has_ventas);
    /**
     * Modifica un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($clientes_has_ventas);
    /**
     * Elimina un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($clientes_has_ventas);
    /**
     * Busca un objeto Clientes_has_ventas en la base de datos.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($clientes_has_ventas);
    /**
     * Lista todos los objetos Clientes_has_ventas en la base de datos.
     * @return Array<Clientes_has_ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Clientes_has_ventas en la base de datos que coincidan con la llave primaria.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Clientes_has_ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCLIENTES_idCLIENTES($clientes_has_ventas);
    /**
     * Lista todos los objetos Clientes_has_ventas en la base de datos que coincidan con la llave primaria.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Clientes_has_ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCLIENTES_TIENDA_idTIENDA($clientes_has_ventas);
    /**
     * Lista todos los objetos Clientes_has_ventas en la base de datos que coincidan con la llave primaria.
     * @param clientes_has_ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Clientes_has_ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByVENTAS_idVENTAS($clientes_has_ventas);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!