<?php

require_once "models/front/Model.php";

class APIManager extends Model{
    public function getDBPrestataires(){
       $req = "SELECT * FROM prestataire pr INNER JOIN prestation pn ON pn.id_prestation = pn.id_prestation 
       INNER JOIN effectuer ef ON ef.id_prestataire = pr. id_prestataire INNER JOIN event ev ON ev.id_event = ef.id_event";
       $stmt = $this->getBdd()->prepare($req);
       $stmt->execute();
       $prestataires = $stmt->fetchAll(PDO::FETCH_ASSOC);
       $stmt->closeCursor();
       return $prestataires;

    }

    public function getDBPrestataire($idPrestataire){
        $req = "SELECT * FROM prestataire pr INNER JOIN prestation pn ON pn.id_prestation = pn.id_prestation
        INNER JOIN effectuer ef ON ef.id_prestataire = pr. id_prestataire
        INNER JOIN event ev ON ev.id_event = ef.id_event
        WHERE pr.id_prestataire = :idPrestataire";

        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":idPrestataire",$idPrestataire,PDO::PARAM_INT);
        $stmt->execute();
        $lignesPrestataire = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $lignesPrestataire;
 
     }
     
     public function getDBPrestations(){
        $req = "SELECT *FROM prestation";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $prestations = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $prestations;
        
     }

     public function getDBEvents(){
        $req = "SELECT *FROM event";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->execute();
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $events;
     }
     
}