<?php

// session_start();

if (!isset($_SESSION['utilisateur'])) {
     header('Location: ?uc=login');
    exit;
}

require('model/bddConnexion.php');
$id = $_SESSION['utilisateur']['Id_utilisateur'];
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "pharmat");

$queryCli = "SELECT * FROM ticket WHERE Id_utilisateur = ?";
$queryAdm = "SELECT * FROM ticket WHERE assignation = ?";

if( $_SESSION['utilisateur']['role']== "CLI") {
    $stmt = $mysqli->prepare($queryCli);
}elseif ($_SESSION['utilisateur']['role']== "ADM") {
    $stmt = $mysqli->prepare($queryAdm);
}
$stmt->bind_param("i", $id);
$stmt->execute();
$array = $stmt->get_result();



include './view/ticketlist.php'; 