<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbdoovys";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=dbdoovys",$username, $password,);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie !".'<br>';
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

?>



<?php ob_start() ?>

   <!-- Cards Section - Prestataires -->
    <div class="container">
        <br><br>
        <h6 class=" title has-text-centered">Nom du prestataire</h6>
                <p class="title has-text-centered ">Salle de réception</p>
                    <p class="subtitle has-text-centered has-text-grey">Célébrez vos événements dans le cadre de vos rêves</p>
        <br><br>
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="assets/images-prestataires/décotable2.png" alt="Déco de table">
                    </figure>
                </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="assets/logos-prestataires/logogul.png.png" alt="">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">Les créations de tables</p>
                        <p class="substitle is-6">@créationsfleuries</p>

                    </div>

                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Nobis assumenda tempore expedita, et sequi distinctio ipsa. 
                        Alias ipsum deleniti recusandae consequuntur, 
                        officiis eius explicabo quaerat vel molestias libero facilis. 
                        Magni.
                    </p>

                </div>
                <footer class="card-footer">
                    <a href="#" class="card-footer-item has-text-primary">Photos</a>
                    <a href="#" class="card-footer-item has-text-primary">Rendez-vous</a>
                    <a href="#" class="card-footer-item has-text-primary">Contacter</a>

                </footer>
        
                        <!-- <div class="content">
                                <a href="prestataires.php" class="button is-primary has-icons-right">Voir plus</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Rendez-vous</a>
                                 <a href="prestataires.php" class="button is-primary has-icons-right">Insta</a>
                        </div> -->
            </div>
    </div>
           



<?php

$content = ob_get_clean();
require "template.php";