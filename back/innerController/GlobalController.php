<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\
    require_once realpath("..").'\dao\factory\FactoryDao.php';

/**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para su proyecto
   */
    define("DEFAULT_GESTOR", FactoryDao::$NULL_GESTOR);
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para su proyecto
   */    
    define("DEFAULT_DBNAME", "dbName");

//That´s all folks!