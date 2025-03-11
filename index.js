// Scripte pour le menu burger sur mobile

document.addEventListener("DOMContentLoaded", () => {
  const burgers = document.querySelectorAll(".navbar-burger");
  const menu = document.querySelector("#navbarBasicExample");
  burgers.forEach((burger) => {
    burger.addEventListener("click", () => {
      burger.classList.toggle("is-active");
      menu.classList.toggle("is-active");
    });
  });
});
<p>
  <ul>
    <li>
      <a href="index.php">Home</a>
    </li>
    <li>
      <a href="prestataires.php">Nos prestataires</a>
    </li>
    <li>
      <a href="form.php">Nous rejoindre</a>
    </li>
    <li>
      <a href="connect.php">Connexion</a>
    </li>
    <li>
      <a href="Compte-pro.php">Prestataire</a>
    </li>
    <li>
      <a href="annonce-par.php">Annonces</a>
    </li>
    <li>
      <a href="events.php">A venir</a>
    </li>
    <li>
      <a href="contact.php">Contact</a>
    </li>
    <li>
      <a href="politique.php">Confidentialité</a>
    </li>
    <li>
      <a href="aboutus.php">A propos</a>
    </li>
    <li>
      <a href="juridique.php">Termes juridiques</a>
    </li>
  </ul>
  <li>
    <a href="messpend.php">Message</a>
  </li>
  <li>
    <a href="notspend.php">Retour à l'accueil</a>
  </li>
</p>;

// <?php ob_start() ?>

// <?php

// $content = ob_get_clean();
// require "template.php";
