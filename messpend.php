<?php ob_start() ?>




<section>

<h2 class="is-size-3-mobile is-size-2 desktop subtitle has-text-grey has-text-centered"> Votre message est bien envoyé. </h2>

 <div class="field">
                    <p class="control">
                        <button class="button is-primary is-centered " type="submit" >
                             <a href="index.php" class="button is-primary has-icons-right">Retour à l'acceuil</a>
                    </p>
               </div>


</section>
<?php

$content = ob_get_clean();
require "template.php";
