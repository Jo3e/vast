<?php

return [
    'database' => [
        'dbname' => '', // Database name
        'host' => '', // Environment eg. localhost/127.0.0.1
        'user' => '', // Database username
        'password' => '', // Database username password
        'options' => [
            PDO::ERRMODE_EXCEPTION => PDOException,
            PDO::ATTR_ERRMODE => false
        ]
    ]
];