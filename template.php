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
                <img src="image-site/logo.png" alt="site logo" style="max-height: 70px" class="py-2">
            </a>
            <span class="navbar-burger burger" data-target="navbarBasicExample">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>



        <div id="navbarBasicExample" class="navbar-menu is-active">
            <div class="navbar-start">

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
                <button class="button is-primary is-outlined">Mon compte</button>
                <button class="button is-primary is-outlined">M'inscrire</button>
            </div>

                <!--breadcrumbs -->
        <div class="section pt-4 pb-0">
            <nav class="breadcrumb has-bullet-separator">
                <ul class="container">
                    <li><a class="has-text-primary" href="index.php">Accueil</a></li>
                    <li><a class="has-text-primary" href="prestataires.php">Coups de coeur</a></li>
                    <li><a class="has-text-primary" href="events.php">Prochainement</a></li>
                    <li><a class="is-active has-text-primary" href="form.php">Nous rejoindre</a></li>
                </ul>
            </nav>
        </div>
        </div>
    </nav>
    <script src="index.js"></script>

    
    <?= $content ?>
    
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
</body>

</html>



