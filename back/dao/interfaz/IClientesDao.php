<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    Querido programador: Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS. TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN. CON AMOR, EL EQUIPO DE ANARCHY  \(x.x)/  \\


interface IClientesDao {

    /**
     * Guarda un objeto Clientes en la base de datos.
     * @param clientes objeto a guardar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($clientes);
    /**
     * Modifica un objeto Clientes en la base de datos.
     * @param clientes objeto con la información a modificar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($clientes);
    /**
     * Elimina un objeto Clientes en la base de datos.
     * @param clientes objeto con la(s) llave(s) primaria(s) para consultar
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($clientes);
    /**
     * Busca un objeto Clientes en la base de datos.
     * @param clientes objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($clientes);
    /**
     * Lista todos los objetos Clientes en la base de datos.
     * @return Array<Clientes> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll();
    /**
     * Lista todos los objetos Clientes en la base de datos que coincidan con la llave primaria.
     * @param clientes objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Clientes> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByIdCLIENTES($clientes);
    /**
     * Lista todos los objetos Clientes en la base de datos que coincidan con la llave primaria.
     * @param clientes objeto con la(s) llave(s) primaria(s) para consultar
     * @return Array<Clientes> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByTIENDA_idTIENDA($clientes);
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close();
}
//That´s all folks!