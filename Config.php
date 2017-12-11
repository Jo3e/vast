<?php

// Fix your database details here

define('DB', '');// Database name
define('USER', '');// Database username
define('HOST', '');// Environment eg. localhost/127.0.0.1
define('PASSWORD', '');// Database username password
define('DBTYPE', 'mysql');// eg mysql, 


// Pick details and return
return [
    'database' => [
        'name' => DB, 
        'user' => USER, 
        'pass' => PASSWORD, 
        'host' => HOST, 
        'dbtype' => DBTYPE, 
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    ]
];