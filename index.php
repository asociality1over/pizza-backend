<?php
header('Access-Control-Allow-Origin: *');

error_reporting(E_ALL); 
ini_set('display_errors', 'on');
require_once 'pdoconfig.php';

try {
    $pdo;
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

$statement = $pdo->prepare("SELECT * FROM products");
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo $json;

?>
