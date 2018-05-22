<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  \\


interface IProductosDao {

    /**
     * Guarda un objeto Productos en la base de datos.
     * @param productos objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($productos);
    /**
     * Modifica un objeto Productos en la base de datos.
     * @param productos objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($productos);
    /**
     * Elimina un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($productos);
    /**
     * Busca un objeto Productos en la base de datos.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($productos);
    /**
     * Lista todos los objetos Productos en la base de datos.
     * @return Array<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Productos en la base de datos que coincidan con la llave primaria.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdPRODUCTOS($productos);
    /**
     * Lista todos los objetos Productos en la base de datos que coincidan con la llave primaria.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($productos);
    /**
     * Lista todos los objetos Productos en la base de datos que coincidan con la llave primaria.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByCATEGORIA_idCATEGORIA($productos);
    /**
     * Lista todos los objetos Productos en la base de datos que coincidan con la llave primaria.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPROVEEDORES_idPROVEEDORES($productos);
    /**
     * Lista todos los objetos Productos en la base de datos que coincidan con la llave primaria.
     * @param productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPROVEEDORES_TIENDA_idTIENDA($productos);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!