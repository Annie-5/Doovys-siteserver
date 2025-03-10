<?php ob_start() ?>

<!-- création d'un buffur 'ob_ start () et ob_get_clean() qui permet de deverser le contenu de la page entre ces 2 fonctions -->
<!-- $content copie du header et du footer suir toutes les pages du site grace au template --> 








    <section class="section">
        <div class="container">
            <h1 class="title">Politique de Confidentialité</h1>
            <p>Nous respectons votre vie privée et nous nous engageons à protéger vos informations personnelles. Cette politique de confidentialité explique comment nous collectons, utilisons et protégeons vos données.</p>
            <h2 class="subtitle">Collecte de données</h2>
            <p>Nous collectons vos informations uniquement dans le cadre de l'organisation de votre événement.</p>
            <h2 class="subtitle">Utilisation des données</h2>
            <p>Les informations collectées sont utilisées pour améliorer l'expérience utilisateur et personnaliser les services proposés.</p>
            <h2 class="subtitle">Sécurité des données</h2>
            <p>Nous prenons toutes les mesures nécessaires pour sécuriser vos données et prévenir tout accès non autorisé.</p>
        </div>
    </section>




<?php
$content = ob_get_clean();
require "template.php";