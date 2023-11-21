<?php
$host = 'localhost';
$dbname = 'aula_pdo';
$username = 'root';
$psswd = '';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $psswd);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

} catch(PDOException $e){

die("Connection failed: ".$e->getMessage());

}


?>