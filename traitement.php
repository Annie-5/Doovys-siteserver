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

if(isset($_POST['ok'])){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $mdp = $_POST['pass'];
    $mdpconfirm = $_POST['pass'];

    

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :nom, :email, :mdp, :mdpconfirm");
    $requete->execute(
        array(
            "nom"=>$nom,
            "email"=>$email,
            "mdp"=>$mdp,
            "mdpconfirm"=> $mdpconfirm 
            
            
        )
    );
    $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($reponse);
}
?>