<?php
require("pdo_con.php");

function listarRegistros($pdo){
$sql="SELECT id, username, email, password_hash FROM usuarios";
$stmt = $pdo->query($sql);
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$registros = listarRegistros($pdo);

?> 