<div class="container">
    
    <div class="container">
    <div class="row justify-content-center my-5">
        <div class="col my-5 text-center"> <h3> Coté Client</h3></div>
    </div>
</div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-10 rounded-3 border border-success border-bottom-3">
            <div class="d-flex justify-content-between align-items-center py-2 border-bottom  border-success">
                <i class="bi bi-arrow-left-circle-fill text-success fs-1"></i>
                <h2 class="text-center text-success fs-3  ">Votre ticket</h1>
                <button type="button" class="btn btn-success py-1 fs-3">Enregistrer</button>
            </div>
            <div class="row pb-2 pt-2 ">
                <div class="col-12 col-lg-4">
                    <div class=" pb-3 d-flex  align-items-center">
                        <h3 class="fs-5" >Ticket n° : <?php echo $oneTicket['Id_ticket'] ?>  </h3> 
                        <h3 class="px-2 fs-5 text-success" value=""></h3>
                    </div>    
                </div>
                <div class="col-12 col-lg-8">
                    <div class=" pb-3 d-md-flex  align-items-center">
                        <h3 class="fs-5" >Titre du ticket : <?php echo $oneTicket['titre'] ?> </h3> 
                        <h3 class="fs-5 px-2 text-success" value=""></h3>
                    </div>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-md-6 col-lg-4">
                    <div class=" pb-3 d-flex  align-items-center">
                        <h3 class="fs-5" >Date : <?php echo $oneTicket['datetime']?>  </h3> 
                        <h3 class="px-2 fs-5 text-success" value=""></h3>
                    </div>    
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class=" pb-3 d-flex  align-items-center">
                        <h3 class="fs-5" >Status : <?php echo $oneTicket['statut']?> </h3> 
                        <h3 class="fs-5 px-2 text-success" value=""> </h3>
                    </div>
                </div>
            </div>
 
            <div class="row pb-2 ">
                <div class="col-12">
                        <h3 class="fs-5" >Description : <?php echo $oneTicket['descriptif']?> </h3> 
                        <p class="px-2 fs-5 " value=""></p>
                </div>
            </div>
            <!-- <div class="row pb-2 ">
                <div class="col-12">
                        <h3 class="fs-5" >Chat : </h3> 
                        <p class="px-2 fs-5 " value=""></p>
                </div>
            </div>  -->
        </div>
    </div>
</div>
<div class="container">
   
   <div class="container">
    <div class="row justify-content-center my-5">
        <div class="col my-5 text-center"></div>
    </div>
</div>