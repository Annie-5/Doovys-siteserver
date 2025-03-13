<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doovys</title>
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="image-site/favicon.ico">
    <Link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    



</head>

<body>
  
<!-- <script src="https://unpkg.com/ionicons-7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script src="https://unpkg.com/ionicons-7.1.0/dist/ionicons/ionicons.js"></script> -->

    <nav class="navbar is-light">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="image-site/logo.png" alt="site logo" style="max-height: 80px" class="py-2">
            </a>
            <span class="navbar-burger burger" data-target="navbarBasicExample">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>



        <div id="navbarBasicExample" class="navbar-menu is-active">
            <div class="navbar-start">

                <!-- A  mettre dans le footer plutôt
                <a class="navbar-item" href="#">À propos de nous</a>
                <a class="navbar-item" href="#">Notre politique</a>
                <a class="navbar-item" href="#">Contact</a>-->

            </div>

            <!-- Ajout de la barre de recherche -->
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="control has-icons-right">
                        <input class="input" type="text" placeholder="Recherchez ici ...">
                        <span class="icon is-right">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container is has-text-centered">
                <br>
                <button class="button is-primary is-outlined" href="connect.php">Mon compte</button>
                <button class="button is-primary is-outlined" href="compte-pro.php">M'inscrire</button>
                


            </div>
        </div>
    </nav>

    <!-- Scripte pour le menu burger sur mobile sur index.js -->

        <!--breadcrumbs -->
        <div class="section pt-4 pb-0">
            <nav class="breadcrumb has-bullet-separator">
                <ul class="container">
                    <li><a class="has-text-primary"href="favoris.php">Coups de coeur</a></li>
                    <li><a class="has-text-primary"href="events.php">Prochainement</a></li>
                    <li><a class="is-active has-text-primary" href="form.php">Nous rejoindre</a></li>
                </ul>
            </nav>
        </div>

          <!-- Hero Section -->
    <section class="hero is-white">
        <div class="hero-body">
            <div class="container">
                <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered">Les talents de l'évènementiel sont réunis ici</h1>
                <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">Découvrez ces professionnels qui feront de votre évènement un moment magique</h2>
            </div>
        </div>
    </section>
<!-- créer les liens vers les cards de chaque image vers son propriétaire -->
    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Décor de rêve</h2>
                    <img src="assets/images-prestataires/Au Buffet des Mariés.png" alt="Déco">
                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">L'instant sublime</h2>
                    <img src="assets/images-prestataires/La mariée - portrait.png" alt="Photo">
                </div>
                 <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Make up parfait</h2>
                    <img src="assets/images-prestataires/LenaMK4.png" alt="Makeup">
                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">La robe de mariée</h2>
                    <img src="assets/images-prestataires/Robe MarieeDos.png" alt="Robe de mariée">
                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Thèmes décoratifs</h2>
                    <img src="assets/images-prestataires/IntiE4.png" alt="Déco">
                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Cadre majestueux</h2>
                    <img src="assets/images-prestataires/décor-table1.png" alt="Salle de réception" href="prestataires.php">
                    
                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">L'artiste pâtissier</h2>
                    <img src="assets/images-prestataires/PièceMontée-Cygne.png" alt="Pâtissier" >

                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Buffet gourmand</h2>
                    <img src="assets/images-prestataires/AynaTraiteur4.png" alt="Traiteur">
                    <a href=""></a></a>
                </div>
                 <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Dégustation fine</h2>
                    <img src="assets/images-prestataires/Dolia Nova traiteur.png" alt="Traiteur">
                    <a href=""></a></a>
                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Instants précieux</h2>
                    <img src="assets/images-prestataires/MargotD.png" alt="Photographe">
                    <a href=""></a></a>
                </div>
                <div class="container is has-text-centered">
                    <div class="btn">
                        <img src="chevron-up-solid.svg" class="fas fa-chevron-up fa-lg" style="color: #40fbff">
                    </div>
                     
                </div>
                    
                
                
            </div>
        </div>
    </section>


                            <!-- Footer -->
    <footer class="footer">
        <div class="content has-text-centered">
            <a class="navbar-item" href="aboutus.php">À propos de nous</a>
            <a class="navbar-item" href="politique.php">Notre politique</a>
            <a class="navbar-item has-text-weight-bold has-text-primary" href="contact.php">Contactez nous</a>
        </div>
        <div class="content has-text-weight-bold has-text-centered" href="juridique.php">
                <p>&copy; 2025 Tous droits réservés.</p>
                <!-- <a href="juridique.php">Termes juridiques</a> -->
        </div>
    </footer> 
    
    <script src="index.js"></script>

  
</body>

</html> 



<?php
$serveurname ="localhost";
$username = "root";
$password = "";
$database ="dbdoovys";

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/front/API.controller.php";
$apiController = new APIController();

try {
    if (empty($_GET['page'])) {
        throw new Exception("La page n'existe pas");

    } else {
        $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
        if (empty($_GET['page']))
            throw new Exception("La page n'existe pas");
        switch ($url[0]) {
            case "front":
                switch ($url[1]) {
                    case "prestataires":
                        $apiController->getPrestataires();
                        break;
                    case "prestataire":
                        if (empty($url[2]))
                            throw new Exception("L'identifiant du prestataire est manquant");
                        $apiController->getPrestataire($url[2]);
                        break;
                    case "events":
                        $apiController->getEvents();
                        break;
                    case "prestations":
                        $apiController->getPrestations();
                        break;
                    default:
                        throw new Exception("La page n'existe pas");
                }
                break;

            case "back":
                echo "page back end demandée";
                break;
            default:
                throw new Exception("La page n'est pas encore présente");

        }



    }



} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}




