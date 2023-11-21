<?php
session_start();
if(!isset($_SESSION['user_id'])){
    echo "Sem permissão para acesso a página<br>";
    echo '<a href="index.php">Ir para página inicial</a>';
    exit;
}
require ('pdo_con.php');

function inserirRegistro($pdo, $nome, $email){
$sql = "INSERT INTO clientes (nome, email) VALUES (:nome, :email)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
return $stmt->execute();
}

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if(inserirRegistro($pdo, $nome, $email)){
        $_SESION['mensagem'] = 'Registro inserido com sucesso';
    } else{
        $_SESSION['mensagem'] = 'Erro ao inserir os registros';
    }

}
?>