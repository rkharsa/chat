<!DOCTYPE html>
<html lang="fr">
  
    <body>
        <div class="container">
            <div class="shadow-lg rounded p-3 mt-3">
       
                <h1>Todos<a href=" <?php echo base_url('TodoC/deconnexion')?>" class="btn btn-primary float-right">Deconnexion</a></h1>
                <form action="<?php echo base_url('TodoC/supprimer')?>" method='POST'>
                      <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Tache</th>
                            <th>Ordre</th>
                            <th>Action</th>
                            <th>Supprimer</th>
                             <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
         
                        <?php
                        foreach ($todos as $Todo):
                            if ($Todo['completed'] == True) {
                                $color = "table-success";
                                $fonction = "pasFait";
                                $statut = "Pas Fait";
                            } else {
                                $color = "table-danger";
                                $statut = "Fait";
                                $fonction = "fait";
                            }
                            ?>
                            <tr class="<?= $color ?> text-center">
                                <td><?= $Todo['id'] ?></td>
                                <td><?= $Todo['tache'] ?></td>
                                <td><?= $Todo['ordre'] ?></td>
                                <td><a href=" <?php echo base_url('TodoC/') . $fonction . "/" . $Todo['id'] ?>"><?= $statut ?></a></td>
                                <td><input type="checkbox" name="supprimer[]" value='<?=$Todo["id"]?>' class="js-switch"> </td>
                                <td><a href=" <?php echo base_url('updateTodoC/chargement?Nom='.$Todo["tache"].'&Ordre='.$Todo["ordre"].'&id='.$Todo["id"]) ?>" >Modifier</a></td>
                            </tr>
                        <?php endforeach; ?>
                   
                    <tbdody>
                        <tfooter>
                            <tr><th>Non Faite</th><td><?=$nbrTacheNonFaite?></td></tr>
                            <tr><th>Faite</th><td><?=$nbrTacheFaite?></td>
                                <tr><th>Nombre Total</th><td><?=$nombreTotal?></td>
                        </tfooter>
                </table> 
                      
                    
                          <a href=" <?php echo base_url('addTodoC/chargement')?>" class="btn btn-success" >Ajouter</a>
                          <a href=" <?php echo base_url('orderTodoC/chargement')?>" class="btn btn-primary" >Reordonner</a>
                          <input type="submit" class="btn-danger btn" value="Supprimer">
              
                  </form>
               
  


            </div>
        </div>
    </body>
             <script>
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html,{color:'#EF5350'});
});
$(".js-switch").change(function(){
    var checkbox=$(this).attr('id');
    console.log($(this).is(":checked"));
     var  name ="#ordre"+$(this).attr("id");
    if ($(this).is(":checked")==true){
     $(name).removeAttr("disabled","disable");
     
    }else{

       $(name).attr("disabled","disable");
    }
}) ;
    

    </script>
</html>