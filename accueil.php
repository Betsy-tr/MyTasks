<!-- Debut section Task -->
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">

        <div class="card" style="border-radius: 15px">
          <div class="card-body p-5">

            <i><h2 style = "font-family:Times New Roman Italic">MY TO DO LIST <i class="fas fa-pen-nib fa-xs text-primary"></h2></i>

            <form action="edit.php?mod=add" method="post" class="d-flex justify-content-center align-items-center mb-4">
              <div class="form-outline flex-fill">
                <input type="text" id="form3" class="form-control form-control-lg" />
                <label class="form-label" for="form3" style="font-family:Times New Roman Italic">Que dois-je faire ?</label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg ms-2" style="font-family:Times New Roman Italic">Ajouter</button>
            </form>

            <?php
                // Récupérer les données dans la table Taches
                $result = $mysqli->query("SELECT * FROM tasks LIMIT 100") ;
                ?>

            
            <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                  aria-controls="ex1-tabs-1" aria-selected="true" style="font-family:Times New Roman Italic">A faire</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                  aria-controls="ex1-tabs-2" aria-selected="false" style="font-family:Times New Roman Italic">En cours</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
                  aria-controls="ex1-tabs-3" aria-selected="false" style="font-family:Times New Roman Italic">Terminer</a>
              </li>
            </ul>
            

            <ul class="list-group mb-0">
            <?php

              // Affichage des taches dans la liste avec une boucle while

               while($tasks = $result->fetch_object()){
            ?> 
            <li class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                    <div class="d-flex align-items-center" id="ex1-content" style="font-family:Times New Roman Italic">
                    <a href="edit.php?mod=upd&id=<?php echo $tasks->id ; ?>" data-mdb-toggle="tooltip" title="Update item">
                      
                    </a>
                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                    <?php 
                      
                      //affiche les taches
                      echo $tasks->tasks ; ?>
                    </div>
                    <!-- Création du lien de suppression -->
                    <a href="edit.php?mod=del&id=<?php echo $tasks->id ; ?>" data-mdb-toggle="tooltip" title="Remove item">
                      <i class="fas fa-times text-primary"></i>
                    </a>
                  </li>
                  <?php
                  }
                  ?>

                  </div>
              
        </div>

      </div>
    </div>
  </div>
</section>
<!-- Fin section Task -->