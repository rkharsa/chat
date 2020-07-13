<!DOCTYPE html>
<html lang="fr">
  
    <body>
        <div class="container">
    
		  <?php
                        foreach ($chats as $chat):
                            // if ($Todo['completed'] == True) {
                            //     $color = "table-success";
                            //     $fonction = "pasFait";
                            //     $statut = "Pas Fait";
                            // } else {
                            //     $color = "table-danger";
                            //     $statut = "Fait";
                            //     $fonction = "fait";
                            // }
                            ?>
                        <div class="mt-1 card"> 
							<div>Discussion créée par <?=$chat[0]?></div>
							<div>(Sur le thème :<?=$chat[1]?>)</div>
							<div>Dans le groupe <?=$chat[2]?></div>
							<div class="mt-1"><<<?=$chat[3]?>>></div>

						</div>
						
                        <?php endforeach; ?>
                   
              
							</div>
							</div>
    </body>

</html>
