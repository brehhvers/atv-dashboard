<?php
  header('Content-Type: text/html; charset=utf-8');
    require ('pdo_con.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    function excluirRegistro($pdo, $id) {
        $sql = "DELETE FROM usuarios WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute();
    }
}
if (excluirRegistro($pdo, $id)) {
    echo "Registro excluído com sucesso!<br>" . "<a href='pdo_r.php'>GERENCIAR CADASTRO</a>";
} else {
    echo 'Erro ao excluir o registro.';
}
?>