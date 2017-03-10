<?php
include 'connect.php';
$bdd = mysqli_connect(SERVER, USER, PASS, DB);
mysqli_set_charset($bdd, "utf8");
$reqaccueil = mysqli_query($bdd, 'SELECT * FROM adresse ORDER BY idadresse');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Caméléon Voyageur</title>
    <link rel="shortcut icon" href="Images/LOGO_MD.resized.png" type="image/x-icon"/>
    <link href="index.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header id="top">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="https://fr-fr.facebook.com/lecameleonvoyageur/" target="_blank">
                    <img class="camel" alt="Logo cameleon" src="Images/LOGO_MD.png">
                </a>

            </div>
            <h1>Le Caméléon Voyageur </h1>
        </div>

    </nav>
    <div class="barre">
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="active"><a data-target="#carousel-example-generic" data-slide-to="0"
                                                      class="active">Home</a></li>
            <li role="presentation"><a data-target="#carousel-example-generic" data-slide-to="1">Bagels</a></li>
            <li role="presentation"><a data-target="#carousel-example-generic" data-slide-to="2">Menu</a></li>
            <li role="presentation"><a data-target="#carousel-example-generic" data-slide-to="3">Qui sommes nous?</a>
            </li>
        </ul>
    </div>

    <div class="logoz">
        <a href="https://fr-fr.facebook.com/lecameleonvoyageur/" target="_blank"><img class="logofa"
                                                                                      src="Images/facebook-icone-5610-64.png"
                                                                                      alt="logo facebook"></a>
        <a href=""><img class="logotw" src="Images/twitter-icone-5811-64 (1).png" alt="logo twitter"></a>
        <a href="tel:+33669154308"><img class="logorss" src="Images/1489108795_phone.png" alt="logo phone"></a>
    </div>
</header>

<div id="carousel-example-generic" class="carousel slide" data-interval="30000">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <?php
        include 'bienvenida.php';
        ?>


        <!-- end of first slide -->
        <div class="item slidebagel"> <!-- debut bagels -->
            <div class="row">
                <div class="col-lg-12">
                    <h1>Tous nos bagels sont à 6.60 €</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL1.jpg" alt="...">
                    </a>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="bottom" data-content="Bagel pour les végétariens!">
                        Vegetables!
                    </button>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL2.jpg" alt="...">
                    </a>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="bottom" data-content="Bagel pour les pecheurs!">
                        Fishy stuff!
                    </button>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL3.jpg" alt="...">
                    </a>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="bottom" data-content="Un bagel sain et bon pour la santé!">
                        Health lovers!
                    </button>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL4.jpg" alt="...">
                    </a>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="bottom" data-content="Mais c'est dingue la dinde!">
                        Une dinde pas deux!
                    </button>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL5.jpg" alt="...">
                    </a>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="bottom" data-content="Le caméléon étant protégé...">
                        Il a vu du monde!
                    </button>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL6.jpg" alt="...">
                    </a>
                    <button type="button" class="btn btn-default" data-container="body" data-toggle="popover"
                            data-placement="bottom" data-content="De la Viande!!!!">
                        Close to a burger!
                    </button>
                </div>
            </div>
        </div>
        <!-- end of bagels -->

        <div class="item menu">
            <div class="row">

                <?php
                include 'menu.php';
                ?>

            </div>
        </div>


        <div class="item presentation">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <img src="Images/camion.jpg" alt="notre camion">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim, nunc sed fringilla
                        mattis, tortor sem mollis neque, sit amet lacinia nisl quam quis ante. Integer imperdiet orci ut
                        enim varius mattis id non neque. Cras rutrum sodales metus, eu condimentum tellus feugiat ut.
                        Donec molestie leo eget magna viverra, sed laoreet est finibus. Sed turpis enim, vehicula eu est
                        rhoncus, vestibulum tristique justo. Integer libero arcu, imperdiet eget cursus id, euismod sed
                        arcu. Phasellus in massa et lectus posuere aliquam. Sed ornare, odio quis suscipit tempor, massa
                        velit semper purus, vel euismod felis metus sit amet mi. Nam tincidunt nibh ac auctor aliquet.
                        Pellentesque vitae gravida nunc. Aenean risus orci, feugiat eget sapien sit amet, consequat
                        eleifend lectus. Quisque lacinia eget elit ut scelerisque. Nullam egestas placerat
                        scelerisque</p>
                    <div class="fb-page" data-href="https://www.facebook.com/lecameleonvoyageur/" data-tabs="timeline" data-width="800" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/lecameleonvoyageur/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/lecameleonvoyageur/">Le Cameleon Voyageur</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <a href="#top">
        <img src="Images/up.png">
    </a>

 </footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>

</body>
</html>