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
    
  <section class="hero is-white">
    <div class="hero-body">
      <div class="container">
        <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered">
         Vous préparez un heureux évènement
        </h1>
        <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">
         Trouvez les artisants de votre bohneur
        </h2>
      </div>
    </div>
  </section>
        <form>
            <div class="field">
             <label class="label">Nom</label>
                <div class="control">
                     <input class="input" type="text" placeholder="Entrez ici votre nom">
                </div>
            </div>

            <div class="field">
                <label class="label">Prénom</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-success" type="text" placeholder="Entrez ici votre prénom" >
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                        
            </div>

            <div class="field">
                <label class="label">Email</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-danger" type="email" placeholder="Entrez ici votre Email">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                    </div>
                        <p class="help is-danger">Cette adresse mail n'est pas valide</p>
            </div>

             <div class="field">
                <label class="label">Téléphone</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-danger" type="email" placeholder="Entrez ici votre numéro de téléphone">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                    </div>
                        <p class="help is-danger">Ce numéro de téléphone n'est pas valide</p>
            </div>
<!-- 
            <div class="field">
                <label class="label">Subject</label>
                    <div class="control">
                        <div class="select">
                            <select>
                                <option>Select dropdown</option>
                                <option>With options</option>
                            </select>
                        </div>
                    </div>
            </div> -->

            <div class="field">
                <label class="label">Votre évènement</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Annoncez votre évènement"></textarea>
                    </div>
            </div>
<!-- Date de l'évent -->
            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox">
                        J'accepte les conditions<a href="#"> Termes et conditions</a>
                    </label>
                </div>
            </div>

            <div class="field">
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
            </div>

            <div class="field is-grouped has-text-right">
                <div class="control has-text-right">
                    <button class="button is-primary is-link">Valider</button>
                </div>
                <div class="control">
                    <button class="button is-primary is-link is-light">Annuler</button>
                </div>
            </div>
        </form>

</body>
</html>


<?php

$content = ob_get_clean();
require "template.php";