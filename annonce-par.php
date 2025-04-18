<?php ob_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <Link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"rel="stylesheet">
  
    <title>Inscription</title>
</head>
<body>
  <form action="traitement.php" method="post" class="section" id="anForm">
           <div class="field">
                <section class="hero is-white">
                    <div class="hero-body">
                    <div class="container">
                        <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered">
                        Vous préparez un heureux événement
                        </h1>
                        <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">
                        Trouvez parmi nos prestataires, les artisants de votre bohneur
                        </h2>
                    </div>
                    </div>
                </section>
                        <form>
                            <div class="field">
                            <label class="label">Nom*</label>
                                <div class="control">
                                    <input class="input is-success" type="text" placeholder="Entrez ici votre nom" required>
                                    <span class="icon is-small is-left">
                                        <ion-icon name=""></ion-icon>
                                    </span>    
                                    <span class="icon is-small is-right">
                                        <ion-icon name=""></ion-icon>
                                    </span>
                                    <span id="error"></span>
                                    <!-- <p class="help is-success">Ce nom est valide</p> -->
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Prénom*</label>
                                    <div class="control">
                                        <input class="input is-success" type="text" placeholder="Entrez ici votre prénom" required >
                                        <span class="icon is-small is-left">
                                        <ion-icon name="contact"></ion-icon>
                                    </span>    
                                    <span class="icon is-small is-right">
                                        <ion-icon name="checkmark"></ion-icon>
                                    </span>
                                    <span id="error"></span>
                                    <!-- <p class="help is-success">Ce prénom est valide</p> -->
                                    </div>
                                        
                            </div>

                            <div class="field">
                                <label class="label">Email*</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-danger" type="email" placeholder="Entrez ici votre Email" required>
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                    </div>
                                        <p class="help is-danger">Cette adresse mail n'est pas valide</p>
                            </div>

                            <!-- <div class="field">
                                <label class="label">Téléphone*</label>
                                    <div class="control has-icons-left has-icons-right">
                                        <input class="input is-danger" type="email" placeholder="Entrez ici votre numéro de téléphone" required>
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <span class="icon is-small is-right">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                    </div>
                                        <p class="help is-danger">Ce numéro de téléphone n'est pas valide</p>
                            </div>
                 -->
                            <!-- <div class="field">
                                <label class="label">Subject</label>
                                    <div class="control">
                                        <div class="select">
                                            <select>
                                                <option>Select dropdown</option>
                                                <option>With options</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>  -->

                            <div class="field">
                                <label class="label">Votre événement*</label>
                                    <div class="control">
                                        <textarea class="textarea" placeholder="Annoncez votre événement" required></textarea>
                                    </div>
                            </div>
                <!-- Date de l'évent -->
                            <div class="field">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        J'accepte les conditions<a href="juridique.php"> Termes et conditions</a>
                                    </label>
                                </div>
                            </div>

                            <!-- <div class="field">
                                <div class="control">
                                    <label class="radio is-primary">
                                        <input type="radio" name="question">
                                        Oui
                                    </label>
                                    <label class="radio is-primary">
                                        <input type="radio" name="question">
                                        Non
                                    </label>
                                </div>
                            </div> -->

                            <div class="field is-grouped has-text-right">
                                <div class="control has-text-right">
                                    <button class="button is-primary  is-link" type="submit">Valider</button>
                                </div>
                                <div class="control">
                                    <button class="button is-primary is-link is-light">Annuler</button>
                                </div>
                            </div>
                            
                        
        </form>
        <script src="https://kit.fontawesome.com/006f782adc.js" crossorigin="anonymous"></script>
       
         
        <!-- <script>

            let anForm = document.getElementById('anForm');
        

            anForm.addEventListener('submit', function(e){
              let anInput = document.getElementById('username');
              let anRegex = /^[a-zA-Z-\s]+$/;

              if (anInput.value.trim() == ""){
                let anError = document.getElementById('error');
                anError.innerHTML = "Le champ nom est requis.";
                anError.style.color  = 'red';
                 e.preventDefault()
              }else if (anRegex.test(anInput.value) == false) {
                let anError = document.getElementById('error');
                anError.innerHTML = "Le nom doit comporter des lettres, des tirets uniquement";
                anerror.style.color ='red';
                 e.preventDefault();
              }
            });
        </script> -->

</body>
</html>


<?php

$content = ob_get_clean();
require "template.php";