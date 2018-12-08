<!DOCTYPE html>
<html lang="fr">

    <body>
        <div class="container">
            <div class="shadow-lg rounded p-3 mt-3">
     
                <h1>Todos<a href=" <?php echo base_url('TodoC/deconnexion')?>" class="btn btn-primary float-right">Deconnexion</a></h1>
                <form action="<?php echo base_url('orderTodoC/reordonner')?>" method='POST'>
                      <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tache</th>
                            <th>Ordre</th>
                            <th>Status</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                  
                        <?php
                        $i=10;
                        foreach ($todos as $Todo):
                            if ($Todo['completed'] == True) {
                                $color = "table-success";
                               
                                $statut = "Pas Fait";
                            } else {
                                $color = "table-danger";
                                $statut = "Fait";
                               
                            }
                            ?>
                            <tr class="<?= $color ?>">
                                <td><?= $Todo['id'] ?></td>
                                <td><?= $Todo['tache'] ?></td>
                                <td><input type="number" value="<?=$i?>" id="ordre<?=$Todo["id"]?>"  class="form-control" name="ordre<?=$Todo['id']?>"> </td>
                                <td><?= $statut ?></td>
                               
                            </tr>
                            
                        <?php
                        $i+=10;
                        endforeach; ?>
                  
                    <tbdody>
                        <tfooter>
                            <tr><th>Non Faite</th><td><?=$nbrTacheNonFaite?></td></tr>
                            <tr><th>Faite</th><td><?=$nbrTacheFaite?></td>
                                <tr><th>Nombre Total</th><td><?=$nombreTotal?></td>
                        </tfooter>
                </table> 
                      <input type="submit" class="btn-danger btn" value="Reordonner">
                      <a href="<?=base_url("TodoC/index")?>" class="btn btn-primary">Retour</a>
                  </form>
               
  


            </div>
        </div>
    </body>
</html>