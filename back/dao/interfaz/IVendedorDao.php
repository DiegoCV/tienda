<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Alguna vez Anarchy se llam� Molotov ( u.u) *Nostalgia  \\


interface IVendedorDao {

    /**
     * Guarda un objeto Vendedor en la base de datos.
     * @param vendedor objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($vendedor);
    /**
     * Modifica un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($vendedor);
    /**
     * Elimina un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($vendedor);
    /**
     * Busca un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($vendedor);
    /**
     * Lista todos los objetos Vendedor en la base de datos.
     * @return Array<Vendedor> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Vendedor en la base de datos que coincidan con la llave primaria.
     * @param vendedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Vendedor> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdVENDEDOR($vendedor);
    /**
     * Lista todos los objetos Vendedor en la base de datos que coincidan con la llave primaria.
     * @param vendedor objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Vendedor> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($vendedor);
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!