<?php
header ('Content-type: text/html; charset=UTF-8');
    require('bd/con_c.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário CRUD com PHP e MySQL</title>
</head>
<body>
    <h1>INSERIR REGISTRO - CREATE</h1>
    <?php if (isset($_SESSION['mensagem'])): ?>
        <p><?php echo $_SESSION['mensagem']; ?></p>
        <?php unset($_SESSION['mensagem']); ?>
    <?php endif; ?>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" name="submit" value="Inserir Registro">
    </form>    
    <hr>
    <a href="dashboard.php">Dashboard</a><br>
    <a href="logout.php">Sair</a>
</body>
</html>