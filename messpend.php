<?php ob_start() ?>




<section>

<h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered"> Votre message est bien envoyé. </h2>

 <div class="field">
                    <p class="control">
                        <button class="button is-link" type="submit" href="index.php">
                        Retour à l'acceuil
                        </button>
                    </p>
               </div>


</section>
<?php

$content = ob_get_clean();
require "template.php";
