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
    <title>Loja de rosquinhas</title>
    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <div class="title">
        <h1>Deseja deletar o item:</h1>
    </div>
    <div class="lista-rosquinhas">
        <?php
        $rosquinhaRep->buscarRosquinha($_POST['id_rosquinha']);
        ?>
    </div>
    <div class="menu-deletar">
        <form action="src/model/DeletarRosquinha.php" method="post">
            <input type="hidden" name="id_rosquinha" value="<?php echo $_POST['id_rosquinha']; ?>">
            <button type="submit" class="btn-confirmar">Confirmar</button>
        </form>

        <button class="btn-cancelar" onclick="window.location.href='index.php'">Cancelar</button>
    </div>
</body>

</html>
