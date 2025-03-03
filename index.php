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
    <script src="https://unpkg.com/ionicons-7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/ionicons-7.1.0/dist/ionicons/ionicons.js"></script>


    <nav class="navbar is-light">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="image-site/logo.png">
            </a>
            <span class="navbar-burger burger" data-target="navbarBasicExample">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>



        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">

                <!-- A  mettre dans le footer plutôt
                <a class="navbar-item" href="#">À propos de nous</a>
                <a class="navbar-item" href="#">Notre politique</a>
                <a class="navbar-item" href="#">Contact</a>-->

            </div>

            <!-- Ajout de la barre de recherche -->
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="control has-icons-left">
                        <input class="input" type="text" placeholder="Trouvez votre prestation">
                        <span class="icon is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="container">
                <br>
                <button class="button is-primary is-outlined">Prochainement</button>
                <button class="button is-primary is-outlined">S'inscrire</button>
                <button class="button is-primary is-outlined">Se connecter</button>


            </div>
        </div>
    </nav>

    <!-- Scripte pour le menu burger sur mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const burgers = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelector('#navbarBasicExample');
            burgers.forEach(burger => {
                burger.addEventListener('click', () => {
                    burger.classList.toggle('is-active');
                    menu.classList.toggle('is-active');
                });
            });
        });
    </script>




    <!-- Hero Section -->
    <section class="hero is-white">
        <div class="hero-body">
            <div class="container">
                <h1 class="title is-1 is-spaced">Les meilleurs prestataires de l'évènementiel sont réunis ici</h1>
                <h2 class="subtitle">Découvrez ces professionnels qui feront de votre évènement un moment magique</h2>
            </div>
        </div>
    </section>

    <!-- Cards Section - Prestataires -->
    <section class="section">
        <div class="container">
            <div class="columns is-multiline">
                <!-- Card 1 -->
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="assets/images-prestataires/EspaceVenise.png" alt="Salle des fêtes">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title">Salle de réception</p>
                            <p class="subtitle">Célébrez vos évènements dans un cadre magni</p>
                            <div class="content">
                                <a href="prestataires.html" class="button is-primary">Voir plus</a>
                                <a href="prestataires.html" class="button is-primary">Rendez-vous</a>
                                <span class="icon"><ion-icon name="ellipsis-horizontal-outline"></ion-icon>

                                </span>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards Section - Prestataires -->
                <section class="section">
                    <div class="container">
                        <div class="columns is-multiline">
                            <!-- Card 1 -->
                            <div class="column is-4">
                                <div class="card">
                                    <div class="card-image">
                                        <figure class="image is-4by3">
                                            <img src="assets/images-prestataires/MargotDuquesne-photographe.png"
                                                alt="Photographe">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <p class="title">Photographe</p>
                                        <p class="subtitle">Capturez vos instants précieux</p>
                                        <div class="content">
                                            <a href="prestataires.html" class="button is-primary">Voir plus</a>
                                            <a href="prestataires.html" class="button is-primary">Rendez-vous</a>
                                            <span class="icon"><ion-icon name="ellipsis-horizontal-outline"></ion-icon>

                                            </span>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <section class="section">
                                <div class="container">
                                    <div class="columns is-multiline">
                                        <!-- Card 1 -->
                                        <div class="column is-4">
                                            <div class="card">
                                                <div class="card-image">
                                                    <figure class="image is-4by3">
                                                        <img src="assets/images-prestataires/DouniaDaiksMakeup.avif"
                                                            alt="Make up professionnel">
                                                    </figure>
                                                </div>
                                                <div class="card-content">
                                                    <p class="title">Make Up Artist</p>
                                                    <p class="subtitle">Offrez-vous le maquillage parfait</p>
                                                    <div class="content">
                                                        <a href="prestataires.html" class="button is-primary">Voir
                                                            plus</a>
                                                        <a href="prestataires.html"
                                                            class="button is-primary">Rendez-vous</a>
                                                        <span class="icon"><ion-icon
                                                                name="ellipsis-horizontal-outline"></ion-icon>

                                                        </span>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Ajouter d'autres cartes ici... -->
                                        <!-- Cards Section - Prestataires -->

                                        <!-- Ajouter d'autres cartes ici... -->


                                    </div>
                                </div>
                            </section>

                            <!-- Footer -->
                            <footer class="footer">
                                <a class="navbar-item" href="#">À propos de nous</a>
                                <a class="navbar-item" href="#">Notre politique</a>
                                <a class="navbar-item" href="#">Contactez nous</a>
                                <div class="content has-text-centered">
                                    <p>&copy; 2025 Tous droits réservés.</p>
                                </div>
                            </footer>
</body>

</html>



<?php
// http://localhost/PRESTASERVER/...
// https://www.doovys.com/...
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
                throw new Exception("La page n'existe pas");

        }



    }



} catch (Exception $e) {
    $msg = $e->getMessage();
    echo $msg;
}




