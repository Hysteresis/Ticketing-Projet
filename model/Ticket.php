<?php 

class Ticket {
    private $db;

    public function __construct(){
        $this->db = new Database();
        $this->db->connect();
    }


    public function getSortedTickets($orderBy)
    {
        $validColumns = ['Id_ticket', 'titre', 'descriptif', 'statut', 'priority', 'categorie', 'assignation', 'datetime', 'Id_utilisateur '];

        // Vérifier si la colonne de tri est valide
        if (!in_array($orderBy, $validColumns)) {
            $orderBy = 'Id_ticket'; // Par défaut, trier par Id_ticket
        }

        $query = "SELECT * FROM ticket ORDER BY $orderBy";
        $stmt = $this->db->connect()->query($query);

        if (!$stmt) {
            die('Erreur de requête SQL : ' . print_r($this->db->connect()->errorInfo(), true));
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOneTicket($ticketId)
        {
            $query = "SELECT * FROM ticket WHERE Id_ticket = :ticketId";
            
            $stmt = $this->db->connect()->prepare($query);
            
            // Utilisation d'une requête préparée pour éviter les injections SQL
            $stmt->bindParam(':ticketId', $ticketId, PDO::PARAM_INT);
            
            if (!$stmt) {
                die('Erreur de requête SQL : ' . print_r($this->db->connect()->errorInfo(), true));
            }

            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }


}
