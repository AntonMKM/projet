<?php
session_start();

require 'controller/membersController.php';

$memberController = new MembersController();

if(!empty($_GET)){
    extract($_GET);

    if(isset($action)){
        switch($action){
            case 'accueil':
                require 'view/homeView.php';
                
// require "controller/articlesController.php";

// extract($_GET);

// if($action == "accueil"){
//     require "view/homeView.php";
//     if(isset($_POST['send'])){
//         sendArticle($_POST);
        
//     }
// }


// require "view/templates.php";

 
                break;
            case 'connexion':
                require 'view/connexion.php';
                break;
            case 'signin':
                require 'view/inscription.php';
                break;
            case 'deconnexion':
                $memberController->disconnect();
                break;
            case 'manage':
                $memberController->viewMembers();
                break;
            case 'inscription':
                $memberController->inscription();
                break;
            case 'update':
                $memberController->update($id);
                break;
            case 'supprimer':
                $memberController->delete($id);
                break;
            case 'connecter':
                $memberController->connexion();
                break;
            default:
                require 'view/error.php';
                break;
        }
    }else{
        require 'view/error.php';
    }
}else{
    require 'view/homeView.php';
}

