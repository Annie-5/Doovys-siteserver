<?php ob_start() ?>




    <section class="hero is-white">
        <div class="hero-body">
            <div class="container">
                <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered">
                    Nos coups de coeurs du moment</h1>
                <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">
                    Découvrez ces professionnels qui feront de votre événement un  merveilleux moment</h2>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns is-vcentered">
                 <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Cadre majestueux</h2>
                    <img src="assets/images-prestataires/espace-Venise.png" alt="Salle de réception" href="prestataires.php">
                    
                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">L'artiste pâtissier</h2>
                    <img src="assets/images-prestataires/PièceMontée-Cygne.png" alt="Pâtissier" >

                </div>
                <div class="column is-4">
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle">Fines bouchées</h2>
                    <img src="assets/images-prestataires/DNova-Traiteur.png" alt="Traiteur">
                    <a href=""></a></a>
                    <!-- créer les liens vers les cards de chaque image vers son propriétaire -->
                </div>
            </div>
        </section>
<?php

$content = ob_get_clean();
require "template.php";