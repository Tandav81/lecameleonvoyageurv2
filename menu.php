
<?php
    $reqmenu = mysqli_query($bdd,'SELECT * FROM plat ORDER BY ordre');
    $datam=mysqli_fetch_assoc($reqmenu);
    $categ='';
    $i=0;
    $donnee='';


    while ($datam=mysqli_fetch_assoc($reqmenu)){
        if($datam['categorie'] != $categ ){

            if ($i > 0) {
                echo '</div>';
            }

            echo '<div class="col-lg-3 col-sm-6 col-md-6">';

            echo '<h3>'.$datam['categorie'].'</h3>';
            echo '<ul>'.$donnee.'</ul>';
        }
        $categ=$datam['categorie'];

        echo '<p><b>'.$datam['dish'].'</b><span style="position:absolute;right:30px;">'.$datam['prix'].' €'.'</span></p>';
        echo '<p><i>'.$datam['compo'].'</i></p>';
        $i++;
    }


?>
    </div>

