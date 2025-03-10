<?php

    require_once "models/front/API.manager.php";
    require_once "models/front/Model.php";
    class APIController {
    private $apiManager;

    public function __construct(){
        $this->apiManager = new APIManager();
    }

    public function getPrestataires(){
        $prestataires = $this->apiManager->getDBPrestataires();
        $tabResultat = $this->formatDataLignesPrestataires($prestataires);
        // echo"<pre>";
        // print_r($tabResultat);
        // echo "</pre>";
        Model::sendJSON($tabResultat);
    }
   
    public function getPrestataire($idPrestataire){
        $lignesPrestataire = $this->apiManager->getDBPrestataire($idPrestataire);
        Model::sendJSON($this->formatDataLignesPrestataires($lignesPrestataire));
           
    }
    
    private function formatDataLignesPrestataires($lignes){
    $tab = [];
        foreach($lignes as $ligne){
            $tab[$ligne['id_prestataire']] = [
                "id" =>$ligne['id_prestataire'],
                "nom" =>$ligne['nomPrestataire'],
                "adresse" =>$ligne['adresse'],
                "tel" =>$ligne['telephone'],
                "email" =>$ligne['email_prestataire'],
                "com" =>$ligne['com'],
                "description" =>$ligne['description_prestataire'],
                "dispo" =>$ligne['disponibilite'],
                "prix" =>$ligne['tarifs'],
                "logo" =>$ligne['logo'],
                "image" =>$ligne['image'],

                "prestation" => [
                    "id" =>$ligne['id_prestation'],
                    "description" =>$ligne['description_prestation']
                ],

                "event" => [
                    "id" => $ligne['id_event'],
                    "nomt" => $ligne['nom_event'],
                    "description" => $ligne['description_event'],
                    "lieu" => $ligne['lieu_event'],
                ],
            ];
        }
        // echo "<pre>";   à décommenter si on a besoin 
        // print_r($tab);  de voir les datas dans le tableau 
        // echo "</pre>";  des prestataires et commenter le return $tab; Sinon les datas apparaîtront en format JSON.
     return $tab;
                                            // COMPARAISON DES DATAS
// -----------------------------------------------------------------------------------------------------------------   
        /*
        Array
(
    [0] => Array
        (
            [id_prestataire] => 2
            [nomPrestataire] => La Rose 77
            [adresse] => 50 route nationale 7 
            lieu-dit : ferme de la folie 
            77310 Boissise le Roi, France
            [telephone] => 652189090
            [com] => https://www.instagram.com/sallelarose77
            Internet : larose.fr
            Facebook.com/sallelarose77
            WhatsApp : +33 6 52 18 90 90
            tel2 : 07 68 32 27 57
            [logo_marque] => SalleLaRose77.png

            [tarifs] => 1000€ - 3700€
            [description_prestataire] => Dans un authentique cadre naturel, LA ROSE 77 est heureuse de vous accueillir. Un endroit idyllique, spécialement conçu afin de concrétiser de manière originale vos fêtes. Mariages, Séminaires, congrès ou conférences, réceptions, comité d'entreprise, soir
            [email_prestataire] => sallelarose77@gmail.com
            [disponibilité] => Devis sur rendez-vous
         §§   [id_prestation] => 15 -----------------------A TRANSFORMER ! SOUS FORME DE TABLEAU
            [description] => Photographie, vidéo
         §§   [id_event] => 1------------------------------A TRANSFORMER ! //
            [nom_event] => Mariage, Fiançailles, Union 
            [description_event] => Célébration accueillant plus de 250 personnes
            [date_event] => 2025-02-12 16:51:42
            [lieu_event] => Lieu de la célébration 
        )

         */
             /* -----------------ça nous donnera : 
        Array
(
    [0] => Array
        (
            [id_prestataire] => 2
            [nomPrestataire] => La Rose 77
            [adresse] => 50 route nationale 7 
            lieu-dit : ferme de la folie 
            77310 Boissise le Roi, France
            [telephone] => 652189090
            [com] => https://www.instagram.com/sallelarose77
            Internet : larose.fr
            Facebook.com/sallelarose77
            WhatsApp : +33 6 52 18 90 90
            tel2 : 07 68 32 27 57
            [logo_marque] => SalleLaRose77.png

            [tarifs] => 1000€ - 3700€
            [description_prestataire] => Dans un authentique cadre naturel, LA ROSE 77 est heureuse de vous accueillir. Un endroit idyllique, spécialement conçu afin de concrétiser de manière originale vos fêtes. Mariages, Séminaires, congrès ou conférences, réceptions, comité d'entreprise, soir
            [email_prestataire] => sallelarose77@gmail.com
            [disponibilité] => Devis sur rendez-vous

            [PRESTATIONS]
          §§    [id_prestation] => 15
                [description] => Photographie, vidéo

           [EVENT] =>  [   
         §§     [id_event] => 1   
                [nom_event] => Mariage, Fiançailles, Union 
                [description_event] => Célébration accueillant plus de 250 personnes
                [date_event] => 2025-02-12 16:51:42
                [lieu_event] => Lieu de la célébration 
            ];
        On aura des objets dans des objets.
         */
    // --------------------------------------------------------------------------------------------------------------
   }
    public function getEvents(){
        $events = $this->apiManager->getDBEvents();
        Model::sendJSON($events);
        // echo "<pre>";
        // print_r($events);
        // echo "</pre>";
    }
    
    public function getPrestations(){
        $prestations = $this->apiManager->getDBPrestations();
        Model::sendJSON($prestations);
        // echo "<pre>";
        // print_r($prestations);
        // echo "</pre>";
    }

}