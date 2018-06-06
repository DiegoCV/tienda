<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Por desgracia, mi epitafio será una frase insulsa y vacía  \\


interface IVentas_has_productosDao {

    /**
     * Guarda un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($ventas_has_productos);
    /**
     * Modifica un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($ventas_has_productos);
    /**
     * Elimina un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($ventas_has_productos);
    /**
     * Busca un objeto Ventas_has_productos en la base de datos.
     * @param ventas_has_productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($ventas_has_productos);
    /**
     * Lista todos los objetos Ventas_has_productos en la base de datos.
     * @return Array<Ventas_has_productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Ventas_has_productos en la base de datos que coincidan con la llave primaria.
     * @param ventas_has_productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Ventas_has_productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByVENTAS_idVENTAS($ventas_has_productos);
    /**
     * Lista todos los objetos Ventas_has_productos en la base de datos que coincidan con la llave primaria.
     * @param ventas_has_productos objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Ventas_has_productos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByPRODUCTOS_idPRODUCTOS($ventas_has_productos);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!