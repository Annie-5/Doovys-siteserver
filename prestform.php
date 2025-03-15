
<?php ob_start() ?>







<body>
    
   <form action="/inscription" method="post" class="section">
        <section class="hero is-white">
            <div class="hero-body">
                <div class="container">
                    <h1 class="is-size-2-mobile is-size-1 desktop title is-1 is-spaced has-text-centered">
                    Proposez votre activité au sein de notre réseau</h1>
                    <h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered">
                    Et diffusez votre talent pour nos prochains événements</h2> 
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
                        <input class="input" type="name" placeholder="Entrez votre marque ..." required>
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
                        <button class="button is-primary has-text-centered" type="submit">
                            <a href="compte-pro.php" class="button is-primary has-icons-right">Créer mon compte professionnel</a>
                        
                        </button>
                    </p>
                </div>
        </section>
    </form>
</body>










<?php

$content = ob_get_clean();
require "template.php";