<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    header ('Content-type: text/html; charset=UTF-8');
    session_start();
    if(!isset($_SESSION['user_id'])){
        echo "Vaza cupincha tu tá sem permissão";
        echo "<a href='index.php'>Ir para página inicial</a>";
        exit;
    }
   
    require("./bd/c_pdo.php");
    require("./bd/r_pdo.php");

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h2>Painel do usuário</h2>
    <p>BEM-VINDA(O)</p>

<form action="" method="POST">
<p>Para cadastrar um novo cliente, insira os dados:</p>
<input type="text" name="nome" placeholder="nome">
<input type="email" name="email" placeholder="email">
<br>
<input type="submit" value="Confirmar" name="submit">
</form>
<br>

<?php foreach($registros as $registro): ?>
    <li><?php echo $registro['nome']; ?> - <?php echo $registro['email'] ?></li>
<?php endforeach; ?>

    <a href="gera_pdf.php" target="_blank">Gerar PDF</a> <br>
    <a href="logout.php">Deslogar</a>
    
</body>
</html>