
<?php ob_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Gestion Utilisateurs</title>

</head>

<body>
    
   <form action="/iscription" method="post" class="section">
        <section class="hero is-white">
            <div class="hero-body">
                <div class="container">
                    <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered"
                    >Créez votre annonce</h1>
                    
                </div>
            </div>
        </section>

        <section>   
            <div class="control">
                <div class="select"type="text"placeholder="Vous êtes...">
                    <select>
                    <option>Professionnel diffusez votre talent</option>
                    <option>Particulier annoncez votre évènement</option>
                    </select>
                </div>
            </div>
        </section> 
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
                <label class="label">Adresse mail</label>
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Entrez votre adresse mail..." required >
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
                        <button class="button is-link" type="submit">
                        M'inscrire
                        </button>
                    </p>
                </div>
        </section>
    </form>
        <!-- <div class="conatiner">
            <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">Inscription</h2>
            <form id="registrationForm" method="POST" action="traitement.php">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <i class="fas fa-user icon"></i>
                    <imput type="text" id="name" name="name" placeholder="Entrez votre nom..." required></imput> 
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <i class="fas fa-envelope icon"></i>
                    <imput type="email" id="email" name="email" placeholder="Entrez votre email..." required></imput> 
                </div>

                <div class="form-group">
                    <label for="name">Mot de passe : </label>
                    <i class="fas fa-lock icon"></i>
                    <imput type="password" id="password" name="password" placeholder="Entrez votre mot de passe..." required></imput> 
                </div>

                <div class="control">
                    <button class="button is-primary">M'inscrire</button>
                </div>

            </form> 

        </div>-->

        <!-- <div>
                <input class="input is-primary"type="text"placeholder="Entrez votre nom">
            
        </div>

        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email" />
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
                </span>
            </p>
            </div>
            <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" placeholder="Mot de passe" />
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>

    
        <div class="control">
            <button class="button is-primary">S'inscrire</button>
        </div> -->


</body>

</html>




<?php

$content = ob_get_clean();
require "template.php";