<?php
require 'src/banco/bd_connection.php';
require 'src/repository/RosquinhaRepository.php';
$rosquinhaRep = new RosquinhaRepository($connection);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Rosquinhas</title>
    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <div class="title">
        <h1>Todas as rosquinhas de <?php echo $_POST['sabor'] ?></h1>
    </div>
    <div class="lista-rosquinhas">
        <?php
        $rosquinhaRep->listRosquinhasByFlavor($_POST['sabor']);
        ?>
    </div>
    <div class="div-criar">
        <button id="btn-criar" onclick="window.location.href='index.php'">Voltar para Loja</button>
    </div>
</body>

</html>
