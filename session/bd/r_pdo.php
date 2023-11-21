<?php
require("con_c.php");

function listarRegistros($pdo){
$sql="SELECT nome, email FROM cliente";
$stmt = $pdo->query($sql);
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$registros = listarRegistros($pdo);

?>