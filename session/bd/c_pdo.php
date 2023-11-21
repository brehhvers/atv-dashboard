<?php
require("pdo_con.php");
function inserirRegistro($pdo, $usnm, $email, $psswd){
$sql = "INSERT INTO usuarios(username, email, password_hash) VALUES (:username, :email, :psswd)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username', $usnm, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':psswd', $psswd, PDO::PARAM_STR);
return $stmt->execute();
echo("teste");
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
    $usnm = strtolower($_POST['username']) ;
    $email = strtolower($_POST['email']);
    $psswd = ($_POST['password']);

    if(!inserirRegistro($pdo, $usnm, $email, $psswd)){
        $msg = ("Error: Unable to insert new record");
    }

}
?>