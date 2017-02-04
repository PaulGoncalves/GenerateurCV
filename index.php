<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
        <!-- Lien bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Accueil">Génération CV</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a class="bouton_barre" href="Accueil">Accueil</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modèles de CV <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="editionCV1">Template numéro 1</a></li>
                                <li><a href="editionCV2">Template numéro 2</a></li>
                                <li><a href="editionCV3">Template numéro 3</a></li>
                                <li><a href="editionCV4">Template numéro 4</a></li>
                                <li><a href="editionCV5">Template numéro 5</a></li>
                            </ul>
                        </li>
                        <li><a class="bouton_barre" href="contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class="container">
            <br />
            <br />
            <br />
            <br />
            

            <div class="row">
            <h3>Les templates de cv disponibles :</h3>
            <br />
            </div>

            <div class="row arriere_ligne-haut">
                <div class="col-md-6 div_cv_haut">
                    <div class="alignement">
                        <a href="edition_cv1.php"><img class="img-responsive" src="img/Template_CV1.JPG" style="width:100%"/></a>
                    </div>
                </div>
                <div class="col-md-6 div_cv_haut">
                    <div class="alignement">
                        <a href="edition_cv2.php"><img class="img-responsive" src="img/Template_CV2.JPG" style="width:100%"/></a>
                    </div>
                </div>
            </div>
            <div class="row arriere_ligne-bas">
                <div class="col-md-6 div_cv_bas">
                    <div class="alignement">
                        <a href="edition_cv3.php"><img class="img-responsive" src="img/Template_CV3.JPG" style="width:100%"/></a>
                    </div>
                </div>
                <div class="col-md-6 div_cv_bas">
                    <div class="alignement">
                        <a href="edition_cv4.php"><img class="img-responsive" src="img/Template_CV4.JPG" style="width:100%"/></a>
                    </div>
                </div>
            </div>
            <div class="row arriere_ligne-bas">
                <div class="col-md-6 div_cv_bas">
                    <div class="alignement">
                        <a href="edition_cv5.php"><img class="img-responsive" src="img/Template_CV5.JPG" style="width:100%"/></a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid">
            <div class="row">
                <p class="pull-left copyright col-md-offset-2 col-md-3 col-xs-offset-1 col-xs-10 footer_font_size">
                    &copy; 2016 copyright <a href="http://paulgoncalves-portfolio.esy.es/">Paul Goncalves</a>
                </p>
                <div class="col-md-offset-2 col-md-3 col-xs-offset-1 col-xs-10 footer_font_size2">
                    <a href="https://github.com/" class="btn btn-social btn-simple"><i class="fa fa-3x fa-github-alt fa-fw"></i> <span class="network-name"></span></a>
                    <a href="https://twitter.com/" class="btn btn-social btn-simple"><i class="fa fa-3x fa-twitter fa-fw"></i> <span class="network-name"></span></a>
                    <a href="https://www.facebook.com/" class="btn btn-social btn-simple"><i class="fa fa-3x fa-facebook fa-fw"></i> <span class="network-name"></span></a>
                    <a href="https://plus.google.com/" class="btn btn-social btn-simple"><i class="fa fa-3x fa-google-plus fa-fw"></i> <span class="network-name"></span></a>

                </div>
            </div>

        </footer>


        <script type="text/javascript">

        </script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>