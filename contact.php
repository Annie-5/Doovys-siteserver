
<?php ob_start() ?>

        <form action="/inscription" method="post" class="section">
           <div class="field">
                <label class="label">Nom*</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-success" type="text" placeholder="Mon nom est:">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                    </div>
            </div>

            <div class="field">
                <label class="label">Prénom*</label>
                     <div class="control has-icons-left has-icons-right">
                        <input class="input is-success" type="text" placeholder="Mon prénom est:">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                 <!--   <p class="help is-success">Ce prénon n'est pas valide</p> -->
            </div>

            <div class="field">
                <label class="label">Email*</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-danger" type="email" placeholder="Mon email est:">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                    </div>
                    <p class="help is-danger">Cet email n'est pas valide</p>
            </div>

            <div class="field">
                <label class="label">S'agit il d'une demande concernant :</label>
                    <div class="control">
                        <div class="select">
                        <select>
                            <option>Nos prestataires</option>
                            <option>Nos évènements</option>
                        </select>
                    </div>
            </div>

            <div class="field">
                <label class="label">Votre Message</label>
                    <div class="control">
                        <textarea class="textarea" placeholder="Ecrivez nous ici..."></textarea>
                    </div>
            </div>

            <!-- <div class="field">
            <div class="control">
                <label class="checkbox">
                    <input type="checkbox">
                    I agree to the <a href="#">terms and conditions</a>
                </label>
            </div>
            

            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="question">
                            Yes
                    </label>
                    <label class="radio">
                        <input type="radio" name="question">
                            No
                    </label>
                </div>
            </div> -->

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" href="messpend.php"> Envoyer </button>
                </div>
                <div class="control">
                    <button class="button is-link is-light" href="notspend.php"> Annuler </button>
                </div>
            </div>
        </form>






<?php

$content = ob_get_clean();
require "template.php";