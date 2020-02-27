<?php


class adminDAO
{

    public static function inscrition($nom, $prenom, $email, $mdp)
    {
        try {
            $connection = myPDO::Connect_PDO();

            $sql = '
            INSERT INTO admin(nom, prenom, email, mdp) 
                VALUES (:nom, :prenom,:email, :mdp)
            ';

            $rs = $connection->prepare($sql);
            $rs->bindValue(":nom", $nom, PDO::PARAM_STR);
            $rs->bindValue(":prenom", $prenom, PDO::PARAM_STR);
            $rs->bindValue(":email", $email, PDO::PARAM_STR);
            //hachage du mot de passe
            $motDePasse = password_hash($mdp,PASSWORD_ARGON2I);
            $rs->bindValue(":mdp", $motDePasse, PDO::PARAM_STR);

            $rs->execute();
            myPDO::Disconnect_PDO($rs, $connection);
            return 'inscription validé';
        } catch (PDOException $e) {
            throw $e;
        }
    }


    public static function connexion(string $email, string $pass)
    {
        try {
            $connection = myPDO::Connect_PDO();

            $sql = '
            SELECT*
            FROM admin
            WHERE email = :email
            
            ';
            // connexion et prepare la requete
            $rs = $connection->prepare($sql);
            // Bindvalue
            $rs->bindValue(':email', $email, PDO::PARAM_STR);
            // Execute la requete 

            $rs->execute();
            if ($rs->rowCount() == 0) {
                return 'identiant inexistant';
            } else {
                $reponse = $rs->fetch();
                $hash = $reponse['mdp'];
                if (Password_verify($pass, $hash)) {
                    
                    return "Bienvenue" . ' ' . $reponse['prenom'] .
                        ' ' . $reponse['nom'];
                } else {
                    return 'identifiant incorrect';
                }
                myPDO::Disconnect_PDO($rs, $connection);
            }
        } catch (PDOException $e) {
            throw $e;
            myPDO::Disconnect_PDO($rs, $connection);
            // }/*finally {
            // myPDO::Disconnect_PDO($rs, $connection);
            //}*/        
        }
    }
}
