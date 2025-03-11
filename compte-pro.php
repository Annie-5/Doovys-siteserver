<?php ob_start() ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <Link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"rel="stylesheet">
  
    <title>Création de compte professionnel</title>
</head>
<body>
    
  <section class="hero is-white">
    <div class="hero-body">
      <div class="container">
        <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered">
         Vous êtes prestataire
        </h1>
        <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">
         Rejoignez notre équipe
        </h2>
      </div>
    </div>
  </section>
        <form>
            <div class="field">
             <label class="label">Nom de votre marque</label>
                <div class="control">
                     <input class="input" type="text" placeholder="Entrez ici votre marque">
                </div>
            </div>

             <div class="field">
             <label class="label">Adresse</label>
                <div class="control">
                     <input class="input" type="text" placeholder="Entrez ici votre où vous exercez">
                </div>
            </div>

            <div class="field">
                <label class="label">Téléphone</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-success" type="text" placeholder="votre numéro de téléphone" >
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <p class="help is-success">Ce numéro n'est pas accepté</p>
                    <!-- plutôt un menu déroulant -->

                    
            <div class="field">
                <label class="label">Domaine d'activité</label>
                    <div class="control">
                        <div class="select">
                            <select>
                                <option>Lieux de cérémonie</option>
                                <option>Salle de Réception</option>
                                <option>Bijoutier</option>
                                <option>Décorateur</option>
                                <option>Photograhe, Vidéaste</option>
                                <option>Maquillage professionnel</option>
                                <option>Maquillage créatifs et déguisemments</option>
                                <option>Soins du corps</option>
                                <option>Onglerie</option>
                                <option>Salon de coiffure</option>
                                <option>Coiffeur mariée à domicile</option>
                                <option>Robe de mariée</option>
                                <option>Costume du marié</option>
                                <option>Tenues de soirée</option>
                                <option>Location des tenues des mariés et de soirées </option>
                                <option>Chaussures de soirée</option>
                                <option>Traiteur</option>
                                <option>Artisan pâtissier</option>
                                <option>Orchestre et musiciens</option>
                                <option>Wedding planneur</option>
                            </select>
                        </div>
                    </div>
            </div>
                      
            </div>Réseaux sociaux</label>
                <div class="control">
                     <input class="input" type="text" placeholder="Liens de vos réseaux">
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
                <label class="label">Votre message</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Decrivez de votre activité"></textarea>
                    </div>
            </div>

             <div class="field">
             <label class="label">Vos Disponibilités</label>
                <div class="control">
                     <input class="input" type="text" placeholder="Entrez ici vos disponibilités">
                </div>
            </div>

             <div class="field">
             <label class="label">Tarifs</label>
                <div class="control">
                     <input class="input" type="text" placeholder="Entrez ici vos tarifs">
                </div>
            </div>

            <div class="file">
                <label class="file-label">
                     <input class="file-input" type="file" name="resume" />
                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label"> Votre logo </span>
                </span>
                </label>
            </div>

            <div class="file has-name">
                <label class="file-label">
                    <input class="file-input" type="file" name="resume" />
                    <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label"> Diffusez votre talent </span>
                    </span>
                    <span class="file-name"> Votre art en photo.png </span>
                </label>
            </div>

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