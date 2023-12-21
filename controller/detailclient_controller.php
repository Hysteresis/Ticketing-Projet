<?php
require_once(__DIR__ . '/../model/Database.php');
require_once(__DIR__ . '/../model/Ticket.php');

$ticket = new Ticket();
$ticket_id = $_GET['ticket_id'];
$oneTicket = $ticket->getOneTicket($ticket_id);




include './view/detail_client.php'; 