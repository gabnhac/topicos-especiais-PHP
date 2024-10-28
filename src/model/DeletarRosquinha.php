<?php
require '../banco/bd_connection.php'; 
require '../repository/RosquinhaRepository.php';

$rosquinhaRep = new RosquinhaRepository($connection);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_rosquinha'])) {
    $id = $_POST['id_rosquinha'];
    $rosquinhaRep->deletaRosquinha($id);
    header("Location: ../../index.php");
    exit;
}
?>
