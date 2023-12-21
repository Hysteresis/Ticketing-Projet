
<div class="container">
    <div class="row">
        <div class="col">           
            <table class="table table-hover table-striped" id="myTable">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Descriptif</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Priorité</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Assignation</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($sortedTickets as $ticket) {
                            // echo "ID: " . $ticket['Id_ticket'] . ", Titre: " . $ticket['titre'] . ", Statut: " . $ticket['statut'] . "<br>";
                        ?>
                            <tr>
                                <th scope="row"><?php echo $ticket['Id_ticket'] ?></th>
                                <td><?php echo $ticket['titre'] ?></td>
                                <td><?php echo $ticket['descriptif'] ?></td>
                                <td><?php echo $ticket['statut'] ?></td>
                                <td><?php echo $ticket['priority'] ?></td>
                                <td><?php echo $ticket['categorie'] ?></td>
                                <td><?php echo $ticket['assignation'] ?></td>
                                <td><?php echo $ticket['datetime'] ?></td>
                            </tr>
                        <?php
                            
                        }
                    ?>

                
                </tbody>
            </table>
        </div>
    </div>
</div>
