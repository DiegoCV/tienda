<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    �Generar buen c�digo o poner frases graciosas? �La frase! �La frase!  \\


interface ITiendaDao {

    /**
     * Guarda un objeto Tienda en la base de datos.
     * @param tienda objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tienda);
    /**
     * Modifica un objeto Tienda en la base de datos.
     * @param tienda objeto con la informaci�n a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tienda);
    /**
     * Elimina un objeto Tienda en la base de datos.
     * @param tienda objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tienda);
    /**
     * Busca un objeto Tienda en la base de datos.
     * @param tienda objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tienda);
    /**
     * Lista todos los objetos Tienda en la base de datos.
     * @return Array<Tienda> Puede contener los objetos consultados o estar vac�o
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Cierra la conexi�n actual a la base de datos
     */
  public function close();
}
//That�s all folks!