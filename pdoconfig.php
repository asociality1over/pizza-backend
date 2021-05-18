<?php
    $host = 'localhost';
    $dbname = 'xaxapizza';
    $username = 'root';
    $password = 'root';
    $charset = 'utf8';
    $collate = 'utf8_general_ci';
    
    $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
    
    $options = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
    );
    $pdo = new PDO($dsn, $username, $password, $options);
?>