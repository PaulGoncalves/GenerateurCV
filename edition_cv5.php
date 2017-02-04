<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Edition CV5</title>
        <!-- Lien bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <link href="css/style.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="validation.js" charset="utf-8"></script>
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

        <div class="container-fluid contenu">
            <div class="row">
                <form class="col-md-8 col-sm-12 col-xs-12" method="post" name="formulairecv1" action="cv5"  onsubmit="return valider ();"  enctype="multipart/form-data">
                    <h3>Information personnelles : <span id="message">Tous les champs doivent être remplis</span></h3>

                    <label>Nom : </label>
                    <input type="text" name="nom" />
                    <label>Prenom : </label>
                    <input type="text" name="prenom" />
                    <label>Mail : </label>
                    <input type="email" name="mail" />
                    <label>Téléphone : </label>
                    <input type="tel" name="tel" />
                    <label>Age : </label>
                    <input type="text" name="age" />
                    <input type="file" name="img-upload" id="bouton_upload"/>


                    <h3>Adresse :</h3>

                    <label>Numéro : </label><input type="text" name="num_adresse" />
                    <label>Nom de rue (Précédé de "rue de..") :</label><input type="text" name="nom_rue" />
                    <label>Code postal : </label><input type="text" name="code_postal" />
                    <label>Ville : </label><input type="text" name="nom_ville" />
                    <label>Pays : </label><input type="text" name="pays" />

                    <h3>Experience professionnelle :</h3>
                    <label>Intulé du poste recherché : </label><input type="text" name="intitule_poste" />
                    <label>Années d'expérience :</label><input type="text" name="exp_intitule" />


                    <h3>Experience professionnelle :</h3>
                    <h5>Experience 1</h5>
                    <label>Date début: </label><input type="text" name="date_deb"/><label>Fin : </label><input type="text" name="date_fin" />
                    <label>Poste occupé : </label><input type="text" name="poste_occupe" />
                    <label>Nom entreprise : </label><input type="text" name="nom_entr" />
                    <label>Ville : </label><input type="text" name="nom_ville_exp" />
                    <label>Mission réalisée : </label><input type="text" name="mission1" />
                    <label>Mission réalisée : </label><input type="text" name="mission2" />
                    <label>Mission réalisée : </label><input type="text" name="mission3" />

                    <h5>Experience 2</h5>
                    <label>Date début: </label><input type="text" name="date_deb2"/><label>Fin : </label><input type="text" name="date_fin2" />
                    <label>Poste occupé : </label><input type="text" name="poste_occupe2" />
                    <label>Nom entreprise : </label><input type="text" name="nom_entr2" />
                    <label>Ville : </label><input type="text" name="nom_ville_exp2" />
                    <label>Mission réalisée : </label><input type="text" name="mission1_2" />
                    <label>Mission réalisée : </label><input type="text" name="mission2_2" />
                    <label>Mission réalisée : </label><input type="text" name="mission3_2" />


                    <h5>Experience 3</h5>
                    <label>Date début: </label><input type="text" name="date_deb3"/><label>Fin : </label><input type="text" name="date_fin3" />
                    <label>Poste occupé : </label><input type="text" name="poste_occupe3" />
                    <label>Nom entreprise : </label><input type="text" name="nom_entr3" />
                    <label>Ville : </label><input type="text" name="nom_ville_exp3" />
                    <label>Mission réalisée : </label><input type="text" name="mission1_3" />
                    <label>Mission réalisée : </label><input type="text" name="mission2_3" />
                    <label>Mission réalisée : </label><input type="text" name="mission3_3" />

                    <h3>Formation :</h3>

                    <h5>Formation 1</h5>
                    <label>Année début : </label><input type="text" name="exp_annee_deb" /><label>Fin : </label><input type="text" name="exp_annee_fin" />
                    <label>Nom de la formation : </label><input type="text" name="nom_formation" />
                    <label>Etablissement d'obtention : </label><input type="text" name="lieu_obtention" />
                    <label>Ville d'obtention : </label><input type="text" name="ville_obtention" />

                    <h5>Formation 2</h5>
                    <label>Année début : </label><input type="text" name="exp_annee_deb2" /><label>Fin : </label><input type="text" name="exp_annee_fin2" />
                    <label>Nom de la formation : </label><input type="text" name="nom_formation2" />
                    <label>Etablissement d'obtention : </label><input type="text" name="lieu_obtention2" />
                    <label>Ville d'obtention : </label><input type="text" name="ville_obtention2" />

                    <h3>Informatique : </h3>

                    <label>Environnement : </label><input type="text" name="environnement"/>
                    <label>Bureautique : </label><input type="text" name="bureautique"/>


                    <h3>Langues : </h3>
                    <label>Langue : </label><input type="text" name="langue" />
                    <label>Niveau : </label>
                    <select name="niveau_langue" >
                        <option>Débutant</option>
                        <option>Intermédiaire</option>
                        <option>Parfaite maitrise</option>
                    </select>

                    <label>Langue : </label><input type="text" name="langue2" />
                    <label>Niveau : </label>
                    <select name="niveau_langue2" >
                        <option>Débutant</option>
                        <option>Intermédiaire</option>
                        <option>Parfaite maitrise</option>
                    </select>
                    <br />
                    <input type="submit" value="Valider" id="submit"/>

                </form>
                <div class="col-md-4 col-sm-12 col-xs-12 trait_screen">
                    <a href="#myModal" data-toggle="modal"><img alt="image template cv 5" class="image_cv1 col-md-12 col-xs-12" src="img/Template_CV5.JPG" /></a>
                </div>
            </div>
        </div>


        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <img src="img/Template_CV5.JPG" alt="Screen page inscription" class="col-md-12 screen_fenetre"/>
                </div>

            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>