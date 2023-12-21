<?php
echo "ticket controller ok";
require_once(__DIR__ . '/../model/Database.php');
require_once(__DIR__ . '/../model/Ticket.php');


// if (isset($_SESSION)){
    $ticket_obj = new Ticket();

    $sortedTickets = $ticket_obj ->getSortedTickets('statut');


   
// }

 include './view/ticket.php';
