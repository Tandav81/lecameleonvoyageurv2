<div class="item active bienvenida" >
    <div class="row">
        <div class="col-lg-offset-4 col-md-offset-3 col-md-6 col-lg-4">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <?php

                while ($data=mysqli_fetch_assoc($reqaccueil)){
                echo '    
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading'.$data['idadresse'].'">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$data['idadresse'].'" aria-expanded="true" aria-controls="collapse'.$data['idadresse'].'">
                                '.$data['jour'].'
                            </a>
                        </h4>
                    </div>
                    <div id="collapse'.$data['idadresse'].'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'.$data['idadresse'].'">
                        <div class="panel-body">
                            '.$data['lieu'].' : '.$data['heure'].'<br/>'.$data['location'].'
                        </div>
                    </div>
                </div>';
                }
                ?>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <a class="thumbnail">

                <iframe id="map" width="100%" height="300px" frameBorder="1" src="http://umap.openstreetmap.fr/fr/map/carte-sans-nom_130369?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
            </a>
        </div>
    </div>
</div>