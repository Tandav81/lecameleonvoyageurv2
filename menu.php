<div class="item menu">
    <div class="row">


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

            echo '<div style="float:left;width:250px;position:relative;margin:0 10px 0 0">';

            echo '<h3>'.$datam['categorie'].'</h3>';
            echo '<ul>'.$donnee.'</ul>';
        }
        $categ=$datam['categorie'];

        echo '<p>'.$datam['dish'].'<span style="position:absolute;right:0;">'.$datam['prix'].'</span></p>';
        echo '<p>'.$datam['compo'].'</p>';
        $i++;
    }


?>
    </div>


    </div>
</div>