<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    ¿Generar buen código o poner frases graciosas? ¡La frase! ¡La frase!  \\


interface IVendedorDao {

    /**
     * Guarda un objeto Vendedor en la base de datos.
     * @param vendedor objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($vendedor);
    /**
     * Modifica un objeto Vendedor en la base de datos.
     * @param vendedor objeto con la información a modificar
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
     * @return Array<Vendedor> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!