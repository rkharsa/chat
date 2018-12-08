
<!DOCTYPE html>
<html lang="fr">
   
    <body>
        <div class="container">
            <div class="shadow-lg rounded p-3 mt-3">
                <?php
    
                if(isset($erreur))
                    echo $erreur;
                ?>
                <form action="<?php echo base_url('connexionC/connexion') ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label> Email</label>
                            <input type="email" class="form-control"  placeholder="Email" name="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control"  placeholder="Password" name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>

                </form>
            </div>
        </div>
    </body>
</html>