<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="?uc=home">PharmaTicket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?uc=ticketlist">Mes tickets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?uc=ticket">Tous les tickets</a>
                </li>




            </ul>
        </div>

        <?php if (isset($_SESSION['utilisateur'])): ?>
           
            <div class="d-flex flex-row ">
                <p class="text-white" aria-current="page"><?php echo $_SESSION['utilisateur']['email']; ?></a> 
                <a class="text-white" href="./model/logout.php">Se deconnecter</a>
            </div>
           
          
       <?php else: ?>
       
          
               <a class="nav-link" href="?uc=login">Se connecter</a>
           
       <?php endif; ?>

    </div>
</nav>