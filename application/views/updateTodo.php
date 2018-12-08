
<!DOCTYPE html>
<html lang="fr">
  
    <body>
        <div class="container">
            <div class="shadow-lg rounded p-3 mt-3">
                <form action="<?php echo base_url('updateTodoC/mettreAjour/'.$_GET['id']) ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >Nom de la tache</label>
                            <input type="text" class="form-control"  placeholder="Nom" name="nom" value="<?=$_GET['Nom']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>L'ordre</label>
                            <input type="number" class="form-control"  placeholder="Ordre" name="ordre" value="<?=$_GET['Ordre']?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Mettre A Jour</button>

                </form>
            </div>
        </div>
    </body>
</html>