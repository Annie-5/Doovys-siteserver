<?php 
abstract class Model {
    private static $pdo;
    

    private static function setBdd(){
        self::$pdo = new PDO("mysql:host=localhost;dbname=dbdoovys;charset=utf8","root","");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    protected function getBDD(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }

    public static function sendJSON($info){
        header("Access-Control-Allow-Origin: *");  
        // Ce header mets à disposition l'API Rest et n'importe qui peut l'interroger 
        // cela donne acces à n'importe qui pourra interroger notre serveur pour récupérer les datas et 
        // n'importe quelle application.
        // si on ne veut que SEULEMENT NOTRE SITE QUI ACCEDERA on remplace le * par l'adresse du site 
        // ce qui permettra de faire une API Rest dédiée à notre entreprise au site de l'entreprise.
       
        header("Content-Type: application JSON");
        // ce header indique que les data générées seront au format JSON.
        // dès qu'une Application externe fera une récupération de data il n'aura pluis la Cross Erreur.
        // à faire idem pour event.
        echo json_encode($info);
    }

}