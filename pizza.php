<?php
require_once 'pdoconfig.php';

try {
    $pdo;
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$statement = $pdo->prepare("SELECT * FROM products WHERE type='pizza'");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo $json;