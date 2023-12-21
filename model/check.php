<?php

// session_start();
// paul@hotmail.fr
// dev
// 


$usermail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_ADD_SLASHES);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_ADD_SLASHES);
$password = hash("md5",$password,false);

require('bddConnexion.php');

$sql_request = "SELECT * FROM utilisateur WHERE email='$usermail'";

$req_request = $bdd->query($sql_request); 
$res_request = $req_request->fetch(PDO::FETCH_ASSOC);




if ($res_request) {
   if($password==$res_request['password']){
            echo '<br><br><br>user trouvé<br><br><br><br>';
        session_start();
        $idUser = $res_request['Id_utilisateur'];

        if($res_request['Id_role'] == 1) {
            $role = "CLI";
        }
        elseif($res_request['Id_role'] == 2) {
            $role = "ADM";
        }
    $_SESSION['utilisateur'] = array(
        'Id_utilisateur' => $idUser,
        'email' => $res_request['email'],
        'role' => $role
        );
        // var_dump($_SESSION['utilisateur']);
        header('Location: ../Ticketing%20projet/?uc=home');
        exit();
    }
   }
   
    $_SESSION['error'] = "Identifiants invalides !";
    // header('Location: ../view/erreur.php');
    exit;
?>
