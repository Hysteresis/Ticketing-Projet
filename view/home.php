
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1 class="text-center">Bienvenue 
                
            <?php
        if(isset($_SESSION['utilisateur'])){

            echo $_SESSION['utilisateur']['email'];
        }
            ?>
            
            
            sur Ticket Pharma</h1>
            <img class="img-fluid mx-auto"  src="https://www.faronics.com/assets/It-ticket-support.jpg" style="width:50%;" alt="">
            <h2 class="text-center">Outils de gestion des tickets</h1>
        </div>
    </div>
</div>
