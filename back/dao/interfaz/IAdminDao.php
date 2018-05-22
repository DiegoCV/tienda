<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Bueno ¿y ahora qué?  \\


interface IAdminDao {

    /**
     * Guarda un objeto Admin en la base de datos.
     * @param admin objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($admin);
    /**
     * Modifica un objeto Admin en la base de datos.
     * @param admin objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($admin);
    /**
     * Elimina un objeto Admin en la base de datos.
     * @param admin objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($admin);
    /**
     * Busca un objeto Admin en la base de datos.
     * @param admin objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($admin);
    /**
     * Lista todos los objetos Admin en la base de datos.
     * @return Array<Admin> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Admin en la base de datos que coincidan con la llave primaria.
     * @param admin objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Admin> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdADMIN($admin);
    /**
     * Lista todos los objetos Admin en la base de datos que coincidan con la llave primaria.
     * @param admin objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Admin> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($admin);
    /**
     * Busca un objeto Admin en la base de datos.
     * @param admin objeto con los atributos de inicio de sesión
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function login($admin);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!