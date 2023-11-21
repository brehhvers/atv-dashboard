<?php
require("con_c.php");


function inserirRegistro($pdo, $nome, $email){
$sql = "INSERT INTO cliente(nome, email) VALUES (:nome_cliente, :email_cliente)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome_cliente', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email_cliente', $email, PDO::PARAM_STR);
return $stmt->execute();
echo("teste");
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
    $nome = strtolower($_POST['nome']) ;
    $email = strtolower($_POST['email']);

    if(inserirRegistro($pdo, $nome, $email)){
       $msg = ("Record inserted successfully");
    }else{
        $msg = ("Error: Unable to insert new record");
    }

}
?>