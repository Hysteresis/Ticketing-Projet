<?php

$host       =   "localhost";
$dbname     =   "pharmat";
$user       =   "root";
$pass       =   "";

    try
    {
        var_dump($dbname );
        $bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br>bddConnexion  ok<br>";
    }
    catch(PDOException $error)
    {
        $_SESSION['error'] = "Probleme de BDD !";

        // header('Location: ../view/erreur.php');
        exit;
    }

?>