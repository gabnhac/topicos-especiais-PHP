<?php
require '../banco/bd_connection.php';
require '../repository/RosquinhaRepository.php';
require '../model/Rosquinha.php';

$rosquinhaRep = new RosquinhaRepository($connection);

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['marca'])
    && isset($_POST['sabor'])
    && isset($_POST['valor'])
    && isset($_POST['id_rosquinha'])
) {
    $sabor = $_POST['sabor'];
    $valor_unit = $_POST['valor'];
    $marca = $_POST['marca'];
    $id = $_POST['id_rosquinha'];
    $rosquinha = new Rosquinha($sabor, $valor_unit, $marca, $id);
    $rosquinhaRep->editRosquinha($rosquinha);
    header("Location: ../../index.php");
    exit;
}
?>