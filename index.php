<?php
include 'connect.php';
	$bdd = mysqli_connect(SERVER, USER, PASS, DB);
    mysqli_set_charset($bdd,"utf8");
	$reqaccueil = mysqli_query($bdd,'SELECT * FROM adresse ORDER BY idadresse');
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Caméléon Voyageur</title>
    <link rel="shortcut icon" href="Images/LOGO_MD.resized.png" type="image/x-icon" />
    <link href="index.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

  </head>
  <body>
   <header id="top">
     <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://fr-fr.facebook.com/lecameleonvoyageur/">
              <img class="camel" alt="Logo cameleon" src="Images/LOGO_MD.png">
            </a>

          </div>
          <h1>Le Caméléon Voyageur  </h1>
          </div>
          
      </nav>
      <div class="barre">
        <ul class="nav nav-tabs nav-justified">
          <li role="presentation" class="active"><a data-target="#carousel-example-generic" data-slide-to="0" class="active">Home</a></li>
          <li role="presentation"><a data-target="#carousel-example-generic" data-slide-to="1">Bagels</a></li>
          <li role="presentation"><a data-target="#carousel-example-generic" data-slide-to="2">Menu</a></li>
          <li role="presentation"><a data-target="#carousel-example-generic" data-slide-to="3">Qui sommes nous?</a></li>
        </ul>
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
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                      <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL2.jpg" alt="...">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                      <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL3.jpg" alt="...">
                      </a>
                    </div>  
                    <div class="col-lg-2 col-md-4 col-sm-6">
                      <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL4.jpg" alt="...">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                      <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL4.jpg" alt="...">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                      <a href="#" class="thumbnail">
                        <img class="bagels" src="Images/BAGELS/BAGEL4.jpg" alt="...">
                      </a>
                    </div>
                </div> 
          </div>
                <!-- end of bagels -->
            <?php
            include 'menu.php';
            ?>


          <div class="item">
              <div class="row">
                <img src="Images/camion2.jpg" alt="...">
                <div class="carousel-caption">
                </div>
              </div>
          </div>
        </div>
      </div>

   <footer>
      <div class="logoz">
          <img class="logofa" src="Images/facebook-icone-5610-64.png" alt="logo facebook">
          <img class="logotw" src="Images/twitter-icone-5811-64 (1).png" alt="logo twitter">
          <img class="logorss" src="Images/rss-icone-8769-64.png" alt="logo rss">
      </div>
   </footer>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>