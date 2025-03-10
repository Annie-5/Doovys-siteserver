
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbdoovys";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=dbdoovys",$username, $password,);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion réussie !".'<br>';
}
catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

?>












<?php ob_start() ?>


<?php

$content = ob_get_clean();
require "template.php";