<?php

class insecteDAO
{
    
    public static function Add($nom,$description,$nbAppercu,$espece) {
        try {
            $connection = myPDO::Connect_PDO();
            $sql = '
                INSERT INTO visiteurnature(nom, description, date, nbAppercu, espece) 
                VALUES (:nom, :description, NOW(), :nbAppercu, :espece)
            ';
            $rs = $connection->prepare($sql);
            
            $rs->bindValue(":nom",$nom, PDO::PARAM_STR);
            $rs->bindValue(":description",$description,PDO::PARAM_STR);
            $rs->bindValue(":nbAppercu",$nbAppercu,PDO::PARAM_INT);
            $rs->bindValue(":espece",$espece,PDO::PARAM_STR);
            // $rs->bindValue(":date", 'CURRENT_DATE' ,PDO::PARAM_STR);


            $rs->execute();
            myPDO::Disconnect_PDO($rs, $connection);
            return 'nouvelle entrée validé';

            
        } catch (PDOException $e) {
            throw $e;
        }
    }


    public static function getInfo(string $espece) : array {
        // Connexion
        $connection = myPDO::Connect_PDO();
        // Request
        $sql = '
            SELECT*
            FROM visiteurnature
            WHERE espece = :espece
        ';
        // Connexion and prepare
        $pdoStatement = $connection->prepare($sql);
        // Bindvalue
        $pdoStatement->bindValue(':espece', $espece, PDO::PARAM_STR);
        // Execute
        $pdoStatement->execute();
        // Return results
        return $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        // deconnection de l base de donnée
        myPDO::Disconnect_PDO($pdoStatement, $connection);
    }

}
