<?php
if(isset($_POST['mailform'])){

    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])){
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"PaulG.fr"<paulgoncalves.contact@gmail.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
<html>
	<body>
		<div align="center">
        <u>Nom de l\'expéditeur : </u>'.$_POST['nom'].'<br />
        <u>Mail de l\'expéditeur : </u>'.$_POST['mail'].'<br /><br />
			'.nl2br($_POST['message']).'
			<br />
		</div>
	</body>
</html>
';

        mail("paulgoncalves.contact@gmail.com", "CONTACT - Générateur de CV", $message, $header);
        $msg = "Votre message a bien été envoyé !";
    } else {
        $msg = "Tous les champs doivent être complétés !";
    }

}
?>


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
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="Accueil">Nom du site</a>
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
            <div class="row">
                <div>
                    <h3 class="col-md-12">Formulaire de contact :</h3> 
                </div> <br />
                <div class="row" id="page_6">
                    <form class="col-md-6" method="POST" action="#contact">
                        <div>
                            <label>Nom :</label>
                            <input type="text" name="nom" placeholder="Votre Nom"/> <br /><br /><br />
                        </div>
                        <div>
                            <label>Courriel :</label>
                            <input type="email" name="mail" placeholder="Votre mail"/> <br /><br /><br />
                        </div>
                        <div>
                            <label>Message :</label>
                            <textarea name="message" placeholder="Votre message"></textarea> <br /><br /><br />
                        </div>
                        <?php
                        if(isset($msg)) {
                            echo $msg;
                        }
                        ?>
                        <div class="button" id="bouton_form">
                            <input class="boutton" type="submit" name="mailform" value="Envoyer votre message" id="submit2"/>
                        </div>
                    </form>
                    <iframe class="col-xs-12 col-sm-12 col-md-6 col-lg-6"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.014762789856!2d2.390179616028328!3d48.857928879287364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66d8b04f6a0c3%3A0x1ceac17c26c68bf9!2sITIC+Paris!5e0!3m2!1sfr!2sfr!4v1474480150287" width="800" height="600" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
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