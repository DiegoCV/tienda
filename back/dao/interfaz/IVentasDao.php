<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Te veeeeeooooo  \\


interface IVentasDao {

    /**
     * Guarda un objeto Ventas en la base de datos.
     * @param ventas objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($ventas);
    /**
     * Modifica un objeto Ventas en la base de datos.
     * @param ventas objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($ventas);
    /**
     * Elimina un objeto Ventas en la base de datos.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($ventas);
    /**
     * Busca un objeto Ventas en la base de datos.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($ventas);
    /**
     * Lista todos los objetos Ventas en la base de datos.
     * @return Array<Ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Ventas en la base de datos que coincidan con la llave primaria.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdVENTAS($ventas);
    /**
     * Lista todos los objetos Ventas en la base de datos que coincidan con la llave primaria.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByVENDEDOR_idVENDEDOR($ventas);
    /**
     * Lista todos los objetos Ventas en la base de datos que coincidan con la llave primaria.
     * @param ventas objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Ventas> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByVENDEDOR_TIENDA_idTIENDA($ventas);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!