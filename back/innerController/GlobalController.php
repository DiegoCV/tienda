<?php
/*
              -------Creado por-------
             \(x.x )/ Anarchy \( x.x)/
              ------------------------
 */

//    La noche est� estrellada, y tiritan, azules, los astros, a lo lejos  \\
    require_once realpath("../..").'\dao\factory\FactoryDao.php';

/**
   * Para su comodidad, defina aqu� el gestor de conexi�n predilecto para su proyecto
   */
    define("DEFAULT_GESTOR", FactoryDao::$MYSQL_FACTORY);
  /**
   * Para su comodidad, defina aqu� el nombre de base de datos predilecto para su proyecto
   */    
    define("DEFAULT_DBNAME", "tienda");

//That�s all folks!