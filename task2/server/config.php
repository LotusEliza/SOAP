<?php

  define('WSDL', "http://tc.geeksforless.net/~user3/SOAP_task2/task2/server/users.wsdl");
    // define('WSDL', "http://abstract.com/server/users.wsdl");

//The link that shows our WSDL (for testing with Wizdler)
//http://abstract.com/server/?WSDL

//  //------------CONNECT MySQL HOME------------
    // define('DB_USER', 'phpmyadmin');
    // define('DB_PASS', '12122');
    // define('DB_NAME', 'cars_soap');
    // define('DB_HOST', 'localhost');
    // define('DB_PORT', '3306');

////------------CONNECT MySQL CLASS---------------
define('DB_USER', 'user3');
define('DB_PASS', 'user3');
define('DB_NAME', 'user3');
define('DB_HOST', 'localhost');

define('DB', 'mysql');
define('MYSQL', 'mysql');

//----------ERROR CONNECT DB--------------
define("ERROR_MYSQL", "DB Error, could not query the database\n MySQL Error: ");
define("ERROR_PG", "DB Error, could not query the database PG");

define("ITEM_INS", "Created!");
define("SERVER_ERROR", "soap server error!");
define("ERROR_SEARCH", "Field Year is required!");
define("ERROR", "Invalid argument!");
define("DB_ERROR", "Sorry! DB error!");
define("ERROR_ORDER", "The name and carID fields are required!");
define("ERROR_INS", "Error while insertion!");
define("ERROR_FLD", "Error can't set field to * or num!");
define('ERROR_SEL', 'Sorry no cars!');