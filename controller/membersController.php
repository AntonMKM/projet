<?php
require 'model/manageMembers.php';
require 'class/membersClass.php';

class MembersController {
function inscription(){
        if(!empty($_POST['login']) AND !empty($_POST['email']) AND !empty($_POST['pass'])){
            $manage = new ManageMembers();
            $member = new Member($_POST);
            $manage->manageInscription($member);
            header('location: index.php?action=manage');
        }else{      
            header('location: index.php?action=inscription');  
        }
    }
    function viewMembers(){
        $manage = new ManageMembers();
        $viewMembers = $manage->manageView();
        while($dataMember = $viewMembers->fetch()){
            $members[]= new Member($dataMember);
        }
        require 'view/manage.php';
    }

    function delete($id){
        $manage = new ManageMembers();
        $manage->manageDelete($id);
        header('location: index.php?action=manage');
    }

    function update($id){
        $manage = new ManageMembers();
        $member = new Member($_POST);
        $member->setId($id);
        $manage->manageUpdate($member);
        header('location: index.php?action=manage');    
    }

    function connexion(){
        $manage = new ManageMembers();
        $connect = $manage->manageConnect($_POST);
        if($member = $connect->fetch()){
           if(password_verify($_POST['pass'], $member['pass'])){
            $_SESSION['id']=$member['id'];
           
           }else{
               $erreur = "Mot de passe erroné";
           }
        }else{
            $erreur = "cet identifiant n'existe pas";
        }
        require 'view/connexion.php';

    }

    function disconnect(){
        session_destroy();
        header('location: index.php');
    }
}