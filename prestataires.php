<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbdoovys";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=dbdoovys",$username, $password,);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connexion réussie !".'<br>';
        // Ici on vérifie la connexion à la bdd
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}
// $sql = "SELECT * FROM prestataire";
// $req = $bdd->query($sql);
// while($rep = $req->fetch()){
//     echo $rep['nomPrestataire'].'<br>'; 
// } Ici on vérifie l'affichage de la table demandée'

// $bdd-> exec("INSERT INTO prestataire VALUES (22, 'Créations de fleurs satin','77 rue des fleurs blanches', 
// '0102020202', 'gulsenRose.fr', 'logogul.png', '5-10€ pièce', 'Je crée les fleurs de vos rêves',
// 'gulsen@gmail.com', 'Devis sur rendez-vous', 12, 'imageGul.png' )");

// On la requête exec pour executer un à jour de prestataire dans la table "prestataire" 
// de la bdd. On l'utilise aussi pour un update ou un delete from. les mettre à jour ou les supprimer.
//  Et les 3 pécédentes requêtes ont bien été executées dans la bdd (phpMyadmin). Il faut juste bien respecter le nom des lignes (columns) écrites dans chaque table dans la bdd.

// -----------------------------------------------Pour sécuriser les datas de chaque prestataire de notre bdd-------------------------------------
// $requete = $bdd->prepare("SELECT * FROM prestataire WHERE nomPrestataire = :nomPrestataire");
// $requete->execute(
//     array(
//                 "nomPrestataire" => "Créations de fleurs satin"
//     )
//     );
//     $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);

//     var_dump($reponse);

//-------- pour afficher toutes les datas de tous les prestataires . Mazis attention pas très sécurisé car n'importe qui peux hacker les données notre site 
// $sql = "SELECT * FROM prestataire";
// $req = $bdd->query($sql);
// $rep = $req->fetchAll();

// var_dump($rep);
?>

<?php ob_start() ?>

<!-- création d'un buffer 'ob_ start () et ob_get_clean() qui permet de deverser le contenu de la page entre ces 2 fonctions -->
<!-- $content copie du header et du footer sur toutes les pages du site grace au template --> 

  <section class="hero is-white">
    <div class="hero-body">
      <div class="container">
        <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered">
          Nos prestataires
        </h1>
        <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">
          Ces professionnels mettent tous leurs talents à votre disposition 
        </h2>
      </div>
    </div>
  </section>

  <!-- <section class="hero is-white">
    <div class="hero-body">
      <div class="container">Page listant les prestataires</div>
    </div>
  </section> -->



    <!-- Cards Section - Prestataires -->
    <section class="section">
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
                            <p class="subtitle has-text-grey">Célébrez vos événements dans le cadre de vos rêves</p>
                            <div class="content">
                                <a href="prestataires.php" class="button is-primary has-icons-right">Voir plus</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Rendez-vous</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
    </section> 
    <section class="section">
            <div class="columns is-multiline">
                <!-- Card 1 -->
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="assets/images-prestataires/locationVoiture.png" alt="Cortège">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title">Le cortège</p>
                            <p class="subtitle has-text-grey">Votre prestigieuse balade</p>
                            <div class="content">
                                <a href="prestataires.php" class="button is-primary has-icons-right">Voir plus</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Rendez-vous</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="section">

            <div class="columns is-multiline">
                <!-- Card 1 -->
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="assets/images-prestataires/lesMaries.png" alt="Photographe">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title">Photographe</p>
                            <p class="subtitle has-text-grey">Capturez vos instants précieux</p>
                            <div class="content">
                                <a href="prestataires.php" class="button is-primary has-icons-right">Voir plus</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Rendez-vous</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Contacter</a>
                    </div>
                </div>
            </div>
    </section>

    <section class="section">
            <div class="columns is-multiline">
                <!-- Card 1 -->
                <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="assets/images-prestataires/PièceMontée-Cygne.png" alt="Artiste pâtissier">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title">Artiste pâtissier</p>
                            <p class="subtitle has-text-grey">Les délicieuses créations</p>
                            <div class="content">
                                <a href="prestataires.php" class="button is-primary has-icons-right">Voir plus</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Rendez-vous</a>
                                <a href="prestataires.php" class="button is-primary has-icons-right">Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    

                <!-- Cards Section - Prestataires
    <section class="section">
        <div class="columns is-multiline">
            Card 1 -->
            <!-- <div class="column is-4">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3"> -->
                            <!-- <img src="assets/images-prestataires/MargotD2.png" alt="Photographe">
                        </figure>
                    </div>
                    <div class="card-content">
                        <p class="title">Photographe</p>
                        <p class="subtitle has-text-grey">Capturez vos instants précieux</p>
                            <div class="content">
                                <a href="prestataires.php" class="button is-primary">Voir plus</a>
                                <a href="prestataires.php" class="button is-primary">Rendez-vous</a>
                                <span class="icon"><ion-icon name="ellipsis-horizontal-outline"></ion-icon></span>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    <section class="section">
        <div class="columns is-multiline"> -->
            <!-- Card 1 -->
                <!-- <div class="column is-4">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="assets/images-prestataires/LenaMK3png.png" alt="Make up professionnel">
                            </figure>                                        
                        </div>
                        <div class="card-content">
                            <p class="title">Make Up Artist</p>
                            <p class="subtitle has-text-grey">Offrez-vous le maquillage parfait pour toute occasion</p>
                                <div class="content">
                                    <a href="prestataires.php" class="button is-primary">Voir plus</a>
                                    <a href="prestataires.php" class="button is-primary">Rendez-vous</a>
                                    <span class="icon"><ion-icon name="ellipsis-horizontal-outline"></ion-icon></span> 
                                </div>                                        
                        </div>
                    </div>                                                                    
                </div>                                           
            </div> 
        </div>                                                                   
    </section> 
     -->
    <section>
        <div class="modal">
            <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Modal title</p>
                            <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <!-- Content ... -->
                    </section>
                    <footer class="modal-card-foot">
                        <div class="buttons">
                            <button class="button is-success">Save changes</button>
                            <button class="button">Cancel</button>
                        </div>
                     </footer>
                </div>
            </div>
        </div>
    </section>
     <!-- Ajouter d'autres cartes ici... -->

<!-- <script src="prestataire.js"></script> -->
<?php

$content = ob_get_clean();
require "template.php";
