<!DOCTYPE html>
<html lang="fr">
    <body>
        <div class="container">
            <div class="shadow-lg rounded p-3 mt-3">
                <form action="<?php echo base_url('addTodoC/ajout') ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >Nom de la tache</label>
                            <input type="text" class="form-control"  placeholder="Nom" name="nom">
                        </div>
                        <div class="form-group col-md-6">
                            <label>L'ordre</label>
                            <input type="number" class="form-control"  placeholder="Ordre" name="ordre">
                        </div>
                    </div>
                     <div class="col-md-12 text-center">
                       <button type="submit" class="btn btn-success col-md-2">Ajouter</button>
<a href="<?=base_url("TodoC/index")?>" class="btn btn-primary col-md-2">Retour</a> 
                    </div>
                    
                </form>
             
            </div>
        </div>
    </body>
</html> 