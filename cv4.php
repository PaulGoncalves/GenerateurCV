<?php
require('fpdf/fpdf.php');

if (isset($_FILES['img-upload']) AND $_FILES['img-upload']['error'] == 0){

    if($_FILES['img-upload']['size'] <= 100000){

        $info = pathinfo($_FILES['img-upload']['name']);
        $extension = $info['extension'];
        $extension_autoriser = array('png', 'jpeg', 'jpg', 'gif', 'bmp', 'PNG', 'JPEG', 'JPG', 'GIF', 'BMP');

        if(in_array($extension, $extension_autoriser)) {
            move_uploaded_file($_FILES['img-upload']['tmp_name'], 'upload/'.basename('logo.'.$extension));


            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $mail = htmlspecialchars($_POST['mail']);
            $tel = htmlspecialchars($_POST['tel']);
            $age = htmlspecialchars($_POST['age']);
            $nom_rue = htmlspecialchars($_POST['nom_rue']);
            $num_adresse = htmlspecialchars($_POST['num_adresse']);
            $code_postal = htmlspecialchars($_POST['code_postal']);
            $nom_ville = htmlspecialchars($_POST['nom_ville']);
            $pays = htmlspecialchars($_POST['pays']);
            $intitule_poste = htmlspecialchars($_POST['intitule_poste']);
            $exp_intitule = htmlspecialchars($_POST['exp_intitule']);
            $date_deb = htmlspecialchars($_POST['date_deb']);
            $date_fin = htmlspecialchars($_POST['date_fin']);
            $poste_occupe = htmlspecialchars($_POST['poste_occupe']);
            $nom_entr = htmlspecialchars($_POST['nom_entr']);
            $nom_ville_exp = htmlspecialchars($_POST['nom_ville_exp']);
            $mission1 = htmlspecialchars($_POST['mission1']);
            $mission2 = htmlspecialchars($_POST['mission2']);
            $mission3 = htmlspecialchars($_POST['mission3']);
            $date_deb2 = htmlspecialchars($_POST['date_deb2']);
            $date_fin2 = htmlspecialchars($_POST['date_fin2']);
            $poste_occupe2 = htmlspecialchars($_POST['poste_occupe2']);
            $nom_entr2 = htmlspecialchars($_POST['nom_entr2']);
            $nom_ville_exp2 = htmlspecialchars($_POST['nom_ville_exp2']);
            $mission1_2 = htmlspecialchars($_POST['mission1_2']);
            $mission2_2 = htmlspecialchars($_POST['mission2_2']);
            $mission3_2 = htmlspecialchars($_POST['mission3_2']);
            $date_deb3 = htmlspecialchars($_POST['date_deb3']);
            $date_fin3 = htmlspecialchars($_POST['date_fin3']);
            $poste_occupe3 = htmlspecialchars($_POST['poste_occupe3']);
            $nom_entr3 = htmlspecialchars($_POST['nom_entr3']);
            $nom_ville_exp3 = htmlspecialchars($_POST['nom_ville_exp3']);
            $mission1_3 = htmlspecialchars($_POST['mission1_3']);
            $mission2_3 = htmlspecialchars($_POST['mission2_3']);
            $mission3_3 = htmlspecialchars($_POST['mission3_3']);
            $exp_annee_deb = htmlspecialchars($_POST['exp_annee_deb']);
            $exp_annee_fin = htmlspecialchars($_POST['exp_annee_fin']);
            $nom_formation = htmlspecialchars($_POST['nom_formation']);
            $lieu_obtention = htmlspecialchars($_POST['lieu_obtention']);
            $exp_annee_deb = htmlspecialchars($_POST['exp_annee_deb']);
            $exp_annee_fin = htmlspecialchars($_POST['exp_annee_fin']);
            $nom_formation = htmlspecialchars($_POST['nom_formation']);
            $lieu_obtention = htmlspecialchars($_POST['lieu_obtention']);
            $ville_obtention = htmlspecialchars($_POST['ville_obtention']);
            $exp_annee_deb2 = htmlspecialchars($_POST['exp_annee_deb2']);
            $exp_annee_fin2 = htmlspecialchars($_POST['exp_annee_fin2']);
            $nom_formation2 = htmlspecialchars($_POST['nom_formation2']);
            $lieu_obtention2 = htmlspecialchars($_POST['lieu_obtention2']);
            $ville_obtention2 = htmlspecialchars($_POST['ville_obtention2']);
            $environnement = htmlspecialchars($_POST['environnement']);
            $bureautique = htmlspecialchars($_POST['bureautique']);
            $langue = htmlspecialchars($_POST['langue']);
            $niveau_langue = htmlspecialchars($_POST['niveau_langue']);
            $langue2 = htmlspecialchars($_POST['langue2']);
            $niveau_langue2 = htmlspecialchars($_POST['niveau_langue2']);

            class PDF extends FPDF
            {
                // En-tête
                function Header()
                {

                    global $nom, $prenom, $nom_rue, $num_adresse, $code_postal, $age, $mail, $tel, $intitule_poste, $exp_intitule, $nom_ville, $pays, $date_deb, $date_fin, $poste_occupe, $nom_entr, $nom_ville_exp, $mission1, $mission2,$mission3, $exp_annee_deb, $exp_annee_fin , $nom_formation, $lieu_obtention, $date_deb2, $date_fin2, $poste_occupe2, $nom_entr2, $nom_ville_exp2, $mission1_2, $mission2_2,$mission3_2,$date_deb3, $date_fin3, $poste_occupe3, $nom_entr3, $nom_ville_exp3, $mission1_3, $mission2_3,$mission3_3,$exp_annee_deb2, $exp_annee_fin2 , $nom_formation2, $lieu_obtention2, $ville_obtention, $ville_obtention2, $bureautique, $environnement, $langue, $niveau_langue, $langue2, $niveau_langue2, $extension ;

                    //Image de fond
                    $this->Image('img/Rectangle_radius.jpg',10,7,65);

                    $this->Ln(0);
                    $this->Image('upload/logo.'.$extension,165,10,30);


                    $this->Ln(20);
                    $this->Cell(5);//Décalage à droite
                    $this->SetFont('Arial','',14); //Police
                    $this->Cell(0,-30, utf8_decode($prenom.' '.$nom),0,0);
                    $this->Cell(-125);//Décalage à droite
                    $this->Cell(0,65, utf8_decode($intitule_poste.' '.$exp_intitule.' ans d\'expérience'),0,0);


                    $this->Ln(-13);// Saut de ligne
                    $this->Cell(5);//Décalage à droite
                    $this->SetFont('Arial','',11);
                    $this->Cell(0,10, $age.' ans',0,0);
                    $this->ln(5);
                    $this->Cell(5);//Décalage à droite
                    $this->Cell(0,10, utf8_decode($num_adresse.' '.$nom_rue),0,0);
                    $this->Ln(5);// Saut de ligne
                    $this->Cell(5);//Décalage à droite
                    $this->Cell(0,10, $code_postal.' '.$nom_ville,0,0);
                    $this->Ln(5);// Saut de ligne
                    $this->Cell(5);//Décalage à droite
                    $this->Cell(0,10, utf8_decode($pays),0,0);
                    $this->Ln(5);// Saut de ligne
                    $this->Cell(5);//Décalage à droite
                    $this->Cell(0,10, utf8_decode($mail),0,0);
                    $this->Ln(5);//Saut de ligne
                    $this->Cell(5);//Décalage à droite
                    $this->Cell(0,10,$tel,0,0);


                    //EXPRERIENCE
                    $this->Ln(15);
                    $this->Cell(5);//Décalage à droite
                    $this->SetFont('Arial','B',13);
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,10,'EXPERIENCES',0,0);

                    $this->Ln(10);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(128,128,128);
                    $this->Cell(0,0, utf8_decode(''),0,0,1,'C');

                    $this->Ln(12);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->Cell(0,0, utf8_decode('- '.$date_deb.' - '.$date_fin),0,0);

                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('- '.$poste_occupe.' - '.$nom_entr.' - '.$nom_ville_exp),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',10); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission1),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission2),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission3),0,0);


                    $this->Ln(10);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,0, utf8_decode('- '.$date_deb2.' - '.$date_fin2),0,0);

                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('- '.$poste_occupe2.' - '.$nom_entr2.' - '.$nom_ville_exp2),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',10); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission1_2),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission2_2),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission3_2),0,0);
                    
                    
                    $this->Ln(10);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,0, utf8_decode('- '.$date_deb3.' - '.$date_fin3),0,0);

                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('- '.$poste_occupe3.' - '.$nom_entr3.' - '.$nom_ville_exp3),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',10); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission1_3),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission2_3),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$mission3_3),0,0);
                    
                    //FORMATIONS
                    $this->Ln(5);
                    $this->Cell(5);//Décalage à droite
                    $this->SetFont('Arial','B',13);
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,10,'FORMATIONS',0,0);

                    $this->Ln(11);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(128,128,128);
                    $this->Cell(0,0, utf8_decode(''),0,0,1,'C');
                    
                    $this->Ln(12);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,0, utf8_decode('- '.$exp_annee_deb.' - '.$exp_annee_fin),0,0);
                    
                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($nom_formation),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',10); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$lieu_obtention.' - '.$ville_obtention),0,0);
                    
                    
                    $this->Ln(10);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,0, utf8_decode('- '.$exp_annee_deb2.' - '.$exp_annee_fin2),0,0);
                    
                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($nom_formation2),0,0);

                    $this->Ln(5);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',10); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode('     '.$lieu_obtention2.' - '.$ville_obtention2),0,0);
                    
                    //INFORMATIQUE
                    $this->Ln(5);
                    $this->Cell(5);//Décalage à droite
                    $this->SetFont('Arial','B',13);
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,10,'INFORMATIQUE',0,0);

                    $this->Ln(11);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(128,128,128);
                    $this->Cell(0,0, utf8_decode(''),0,0,1,'C');
                    
                    
                    $this->Ln(12);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,0, utf8_decode('- Environnement :'),0,0);
                    
                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($environnement),0,0);
                    
                    $this->Ln(10);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,0, utf8_decode('- Bureautique :'),0,0);
                    
                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($bureautique),0,0);
                    
                    //LANGUE
                    $this->Ln(10);
                    $this->Cell(5);//Décalage à droite
                    $this->SetFont('Arial','B',13);
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,10,'LANGUES',0,0);

                    $this->Ln(11);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetFillColor(128,128,128);
                    $this->Cell(0,0, utf8_decode(''),0,0,1,'C');
                    
                    $this->Ln(11);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,0, utf8_decode($langue.' :'),0,0);
                    
                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($niveau_langue),0,0);
                    
                    $this->Ln(10);
                    $this->Cell(6);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(255,255,255);
                    $this->Cell(0,0, utf8_decode($langue2.' :'),0,0);
                    
                    $this->Ln(0);
                    $this->Cell(70);//Décalage à droite
                    $this->SetFont('Arial','',11); //Police
                    $this->SetTextColor(0,0,0);
                    $this->Cell(0,0, utf8_decode($niveau_langue2),0,0);


                }
            }

            // Instanciation de la classe dérivée
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',12);
            $pdf->Output();
        } else {
            $message = "L'extension de l'image n'est pas autorisée.";
        }

    } else {
        $message = "L'image est trop grosse.";
    }

}else {
    $message = "Vous n'avez pas mis l'image dans le formulaire.";
}

echo $message;


?>