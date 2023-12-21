<?php
    session_start();

    if (!isset($_SESSION['utilisateur'])) {
        header('Location: ../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur</title>
</head>

    <body>
        <h1>Une erreur est survenue...</h1>
        <?php if(isset($_SESSION['error'])): ?>
        <p> <?= $_SESSION['error'] ?> </p>
        <?php  $_SESSION['error'] = null; ?>
        <?php endif ?>
    </body>

</html>