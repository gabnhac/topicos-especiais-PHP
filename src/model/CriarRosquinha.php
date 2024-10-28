<?php
require '../banco/bd_connection.php';
require '../repository/RosquinhaRepository.php';
require '../model/Rosquinha.php';

$rosquinhaRep = new RosquinhaRepository($connection);

if (
    $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['marca'])
    && isset($_POST['sabor'])
    && isset($_POST['valor'])
) {
    $sabor = $_POST['sabor'];
    $valor_unit = $_POST['valor'];
    $marca = $_POST['marca'];
    $rosquinhaRep->criaRosquinha($sabor, $marca, $valor_unit);
    header("Location: ../../index.php");
    exit;
}
?>