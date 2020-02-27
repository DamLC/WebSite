<?php

class affichageDAO{


public static function affichage(string $donnees) : array {
        // Connexion
        $connection = myPDO::Connect_PDO();
        // Request
        $sql = '
            SELECT *
            FROM :donnees;          
        ';
        // Connexion and prepare
        $rs = $connection->prepare($sql);
        // Bindvalue
        $rs->bindValue(":donnees", $donnees,PDO::PARAM_STR);
        // Execute
        $rs->execute();
        // Return results 
        // deconnection de l base de donnée
        myPDO::Disconnect_PDO($rs, $connection);
  
        return $rs->fetchAll(PDO::FETCH_CLASS, self::class);
         }
}