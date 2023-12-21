<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="?uc=home">PharmaTicket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?uc=ticket">Tous les tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?uc=login">Se connecter</a>
                </li>
                <?php
                
                    if(isset($_SESSION['utilisateur'])){
                        echo "Bienvenue " . $_SESSION['utilisateur']['email'];
                        ?>
                        <a href="./model/logout.php">Se deconnecter</a>

                        <?php

                    } else {
                        echo "non connecté " ;
                        

                    }
                ?>
            </ul>
        </div>
    </div>
</nav>