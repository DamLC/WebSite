<?php
require 'MyPDO.php';
require 'InsecteDAO.php';
require 'adminDAO.php';
require 'pass.php';
require 'affichageDAO.php';

if (isset($_REQUEST['action'])) {
    
    $action = $_REQUEST['action'];
    switch ($action) {
        case 'getInfo':
            echo json_encode(array_values(insecteDAO::getInfo($_REQUEST['espece'])));
            break;

        case 'Add':
            $temp = insecteDAO::Add($_REQUEST['nom'], $_REQUEST['description'], $_REQUEST['nbAppercu'], $_REQUEST['espece']);
            echo $temp; 
            break;

        case 'inscription':
            $temp = adminDAO::inscrition($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['email'], $_REQUEST['mdp']);
           echo $temp;
            break;

        case 'connexion':
            $temp = adminDAO::connexion($_REQUEST['email'], $_REQUEST['pass']);
            echo  $temp;
            break;

            case 'afficher':
            echo json_encode(array_values(affichageDAO::affichage($_REQUEST['donnees'])));
            break;

        default:
            echo 'je ne comprend pas votre action !';
            break;
    }
} 
else {
    echo 'désolé je ne comprend pas votre requete.';
}

?>