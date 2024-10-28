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
        <h1>Edite o item:</h1>
    </div>
    <div class="lista-rosquinhas">
        <?php
        $rosquinhaRep->buscarRosquinha($_POST['id_rosquinha']);
        ?>
    </div>
    <div class="edit-menu">
        <form class="form-edit" action="src/model/EditarRosquinha.php" method="post">
            <div><input placeholder="Marca" type="text" name="marca" required></div>
            <div><input placeholder="Sabor" type="text" name="sabor" required></div>
            <div><input placeholder="Valor" type="number" step=".01" name="valor" required></div>
            <input type="hidden" name="id_rosquinha" value="<?php echo $_POST['id_rosquinha']; ?>">
            <div class="options">
                <button type="submit" class="btn-confirmar">Confirmar</button>
                <button class="btn-cancelar" onclick="window.location.href='index.php'">Cancelar</button>
            </div>
        </form>

    </div>
</body>

</html>
