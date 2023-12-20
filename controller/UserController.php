<?php

require_once(__DIR__ . '/../model/Database.php');
require_once(__DIR__ . '/../model/UserModel.php');


$userModel = new UserModel();

$sortedTickets = $userModel->getSortedTickets('statut');

$userModel = new UserModel();
                
foreach ($sortedTickets as $ticket) {


  

    
}
// print_r($users);
