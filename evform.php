
<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication d'événement</title>

</head>

<body>
    
  <form action="traitement.php" method="post" class="section" id="evForm">
        <section class="hero is-white">
            <div class="hero-body">
                <div class="container">
                    <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered">
                    Annoncez votre événement</h1>
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">
                    Et profitez d'un contact privilégié avec nos professionnels</h2> 
                </div>
            </div>
        </section>

        <!-- <section>   
            <div class="control">
                <div class="select"type="text"placeholder="Vous êtes...">
                    <select>
                    <option>Professionnel diffusez votre talent</option>
                    <option>Particulier annoncez votre événement</option>
                    </select>
                </div>
            </div>
        </section>  -->

        <section>
            <div class="container">
                <h1></h1>
            </div>
        </section>
        <section>  
            
            <div class="field">
                <label class="label">Nom</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="name" placeholder="Entrez votre nom ..." required>
                        <span class="icon is-small mdi mdi-dark is-left">
                        <i class="fas fa-user"></i>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                        </span>
                    </p>
            </div>

             <div class="field">
                <label class="label">Prénom</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="name" placeholder="Entrez votre prénom ..." required>
                        <span class="icon is-small mdi mdi-dark is-left">
                        <i class="fas fa-user"></i>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                        </span>
                    </p>
            </div>


            <div class="field">
                <label class="label">Adresse mail</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Entrez votre adresse mail..." required>
                        <span class="icon is-small mdi mdi-dark is-left">
                        <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                        </span>
                    </p>
            </div>
                <div class="field">
                    <label class="label">Mot de passe</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Entrez votre mot de passe..." required>
                        <span class="icon is-small mdi mdi-dark is-left">
                        <i class="fas fa-lock"></i>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <label class="label">Mot de passe (Confimation)</label>
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Confirmez votre mot de passe..." required>
                        <span class="icon is-small mdi mdi-dark is-left">
                        <i class="fas fa-lock"></i>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        <button class="button is-primary has-text-centered" type="submit">
                            <a href="events.php"></a>
                        Publier mon annonce
                        </button>
                    </p>
                </div>
        </section>
    </form>
    
      

<script src="https://kit.fontawesome.com/006f782adc.js" crossorigin="anonymous"></script>
</body>

</html>




<?php

$content = ob_get_clean();
require "template.php";