    <!-- Créer un nouveau ticket -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-10 rounded-3 border border-success border-bottom-3">
                <div class="text-center pt-4">
                 	<form action="Formulaire_Ticket.html"  method="POST" class="form-example">
                 	   <input type="submit" class="btn btn-success px-5" value="Créer un nouveau ticket">
                		</form>
                </div>
                <div class="text-center text-success py-3 fs-4">
                    <a href="#" class="link-success">Votre Historique</a>
                </div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date de création</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($array)) {
                            foreach ($array as $ticket) : ?>
                            <tr>
                                <th><?= print_r($ticket['Id_ticket']) ?></th>
                                <td><?= print_r($ticket['descriptif']) ?></td>
                                <td><?= print_r($ticket['datetime']) ?></td>
                                <td><?= print_r($ticket['statut']) ?></td>
                            </tr>
                        <?php endforeach;
                        } else {
                        // Aucun ticket trouvé pour l'utilisateur
                        echo '<tr><td colspan="4">Aucun ticket trouvé.</td></tr>';
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
<!-- code ajouté -->